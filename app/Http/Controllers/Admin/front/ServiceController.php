<?php

namespace App\Http\Controllers\Admin\front;
use App\Http\Requests\FrontEnd\Service\EditRequest;
use App\Http\Requests\FrontEnd\Service\CreateRequest;
use App\Models\front\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id');

        $this->search = [
            'title' =>\request()->get('title') ,
        ];

        if ($this->search['title']){
            $services->where('title' , 'like' , "%{$this->search['title']}%");
        }
        $services=$services->paginate(10)->appends($this->search);
        return view('frontend.service.index')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.service.create');
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
        $request['image'] = $image;

        Service::create($request->all());

        session()->flash('msg', "s: تم إضافة خدمة بنجاح");
        return redirect(route('services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::find($id);

        if ($services == null) {
            session()->flash('msg', 'w: هذه الحدمة غير موجودة');
            return redirect(route('services.index'));
        } else {

            return view('frontend.service.show')->with('services', $services);
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
        $service = Service::find($id);



        if($service==null){
            session()->flash("msg", "هذه الخدمة غير موجودة");
            return redirect(route("services.index"));
        }
        return view("frontend.service.edit")->withService($service);

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
            $request['image'] = $image;
        }

        Service::find($id)->update($request->all());
        session()->flash("msg", "تم تحديث الخدمة");
        return redirect(route("services.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Service::destroy($id);
        session()->flash("msg", "w: تم حذف الخدمة");
        return redirect(route("services.index"));


    }
}
