<?php

namespace App\Http\Controllers\Admin\front;

use App\Http\Requests\FrontEnd\Slide\EditRequest;
use App\Http\Requests\FrontEnd\Slide\CreateRequest;
use App\Models\front\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $slides = Slide::get() ;

        return view('admin.settings.slide.index')->with('slides',$slides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {


        $imageName= basename($request->imageFile->store("public" , 'public'));
        $request['image']=$imageName;

        Slide::create($request->all());

        session()->flash('msg', "s: تم إضافة السلايد بنجاح");

        return redirect(route('slide'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slides = Slide::find($id);

        if ($slides == null) {
            session()->flash('msg', 'w: هذا السلايد غير موجود');
            return redirect(route('slide'));
        } else {

            return view('admin.settings.slide.show')->with('slides', $slides);
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
        $slide = Slide::find($id);



        if($slide==null){
            session()->flash("msg", "هذا السلايد غير موجود");
            return redirect(route("slide"));
        }
        return view("admin.settings.slide.show")->withSlides($slide);

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
            $imageName= basename($request->imageFile->store("public"));
            $request['image']=$imageName;

        }

        Slide::find($id)->update($request->all());
        session()->flash("msg", "تم تحديث السلايد");
        return redirect(route("slide"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Slide::destroy($id);
        session()->flash("msg", "w: تم حذف السلايد");
        return redirect(route("slide"));


    }
}
