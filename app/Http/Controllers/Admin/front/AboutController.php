<?php
namespace App\Http\Controllers\Admin\front;


use App\Http\Requests\FrontEnd\About\CreateRequest;
use App\Http\Requests\FrontEnd\About\EditRequest;
use App\Models\front\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('id');

        $this->search = [
            'title' =>\request()->get('title') ,
        ];

        if ($this->search['title']){
            $abouts->where('title' , 'like' , "%{$this->search['title']}%");
        }
        $abouts=$abouts->paginate(10)->appends($this->search);
        return view('frontend.about.index')->with('abouts',$abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {


        $image = basename($request->imageFile->store("public" , 'public'));
        $request['image'] = $image;

        About::create($request->all());

        session()->flash('msg', "s: تم إضافة حول الشركة بنجاح");
        return redirect(route('abouts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts = About::find($id);

        if ($abouts == null) {
            session()->flash('msg', 'w: هذا غير موجود');
            return redirect(route('abouts.index'));
        } else {

            return view('frontend.about.show')->with('abouts', $abouts);
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
        $about = About::find($id);



        if($about==null){
            session()->flash("msg", "هذا  غير موجود");
            return redirect(route("abouts.index"));
        }
        return view("frontend.about.edit")->withabout($about);

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
            $image = basename($request->imageFile->store("public" , 'public'));
            $request['image'] = $image;
        }

        About::find($id)->update($request->all());
        session()->flash("msg", "تم تحديثه");
        return redirect(route("abouts.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        About::destroy($id);
        session()->flash("msg", "w: تم حذفه");
        return redirect(route("abouts.index"));


    }
}
