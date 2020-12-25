<?php

namespace App\Http\Controllers\Admin\front;
use App\Http\Requests\FrontEnd\Mmcompany\CreateRequest;
use App\Http\Requests\FrontEnd\Mmcompany\EditRequest;
use Illuminate\Http\Request;
use App\Models\front\Mmcompany;
use App\Http\Controllers\Controller;

class MmcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // dd('adkhadhabsd');
        $companys = Mmcompany::orderBy('id');

        $this->search = [
            'name' =>\request()->get('name') ,
        ];

        if ($this->search['name']){
            $companys->where('name' , 'like' , "%{$this->search['name']}%");
        }
        $companys=$companys->paginate(10)->appends($this->search);
        return view('frontend.company.index')->with('companys',$companys);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {


        $image = basename($request->imageFile->store("public" , "public"));
        $request['logo'] = $image;

        Mmcompany::create($request->all());

        session()->flash('msg', "s: تم الإضافة بنجاح");
        return redirect(route('companys.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companys = Mmcompany::find($id);

        if ($companys == null) {
            session()->flash('msg', 'w:غير موجود ');
            return redirect(route('companys.index'));
        } else {

            return view('frontend.company.show')->with('companys', $companys);
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
        $company = Mmcompany::find($id);



        if($company==null){
            session()->flash("msg", " غير موجود ");
            return redirect(route("companys.index"));
        }
        return view("frontend.company.edit")->withcompany($company);

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
        if($request->imageFile){
            $image = basename($request->imageFile->store("public" , "public"));
            $request['logo'] = $image;
        }

        Mmcompany::find($id)->update($request->all());
        session()->flash("msg", "تم تحديثه ");
        return redirect(route("companys.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Mmcompany::destroy($id);
        session()->flash("msg", "w:تم حذفه  ");
        return redirect(route("companys.index"));


    }
}
