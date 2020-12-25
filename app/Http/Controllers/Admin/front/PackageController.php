<?php

namespace App\Http\Controllers\Admin\front;

use App\Http\Requests\FrontEnd\Package\CreateRequest;
use App\Http\Requests\FrontEnd\Package\EditRequest;
use App\Models\front\Package;
use App\Models\front\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{

    public function index()
    {
    $packages =Package::orderBy('id');

    $this->search = [
    'name' =>\request()->get('name') ,
    ];

    if ($this->search['name']){
    $packages->where('name' , 'like' , "%{$this->search['name']}%");
    }
    $packages=$packages->paginate(10)->appends($this->search);
    return view('frontend.package.index')->with('packages',$packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $request['prop'] = explode(',',$request['prop']  );
        $request['prop'] = json_encode($request['prop']);
//dd($request->all());
        Package::create($request->all() );

        session()->flash('msg', "s: تم إضافة التسعير بنجاح");
        return redirect(route('packages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packages = Package::find($id);

        if ($packages== null) {
            session()->flash('msg', 'w: هذا غير موجود');
            return redirect(route('packages.index'));
        } else {

            return view('frontend.package.show')->with('packages', $packages);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package= Package::find($id);



        if($package==null){
            session()->flash("msg", "هذا  غير موجود");
            return redirect(route("packages.index"));
        }
        return view("frontend.package.edit")->withpackage($package);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $request['prop'] = explode(',',$request['prop']  );
        $request['prop'] = json_encode($request['prop']);

        Package::find($id)->update($request->all());
        session()->flash("msg", "تم تحديثه");
        return redirect(route("packages.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Package::destroy($id);
        session()->flash("msg", "w: تم حذفه");
        return redirect(route("packages.index"));


    }
}
