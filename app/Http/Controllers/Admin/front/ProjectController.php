<?php

namespace App\Http\Controllers\Admin\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontEnd\Project\CreateRequest;
use App\Http\Requests\FrontEnd\Project\EditRequest;
use App\Models\front\Project;
use App\Models\front\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id');

        $this->search = [
            'title' =>\request()->get('title') ,
        ];

        if ($this->search['title']){
            $projects->where('title' , 'like' , "%{$this->search['title']}%");
        }
        $projects=$projects->paginate(10)->appends($this->search);
        return view('frontend.project.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('frontend.project.create')->with('services',$services);
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

        Project::create($request->all());

        session()->flash('msg', "s: تم إضافة المشروع بنجاح");
        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Project::find($id);
        $services = Service::get();
        if ($projects == null) {
            session()->flash('msg', 'w: هذا المشروع غير موجود');
            return redirect(route('projects.index'));
        } else {

            return view('frontend.project.show')->with('projects', $projects)->with('services',$services);
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
        $project = Project::find($id);

        $services = Service::get();

        if($project==null){
            session()->flash("msg", "هذا المشروع غير موجود");
            return redirect(route("projects.index"));
        }
        return view("frontend.project.edit")->withproject($project)->with('services',$services);

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

        Project::find($id)->update($request->all());
        session()->flash("msg", "تم تحديث المشروع");
        return redirect(route("projects.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Project::destroy($id);
        session()->flash("msg", "w: تم حذف المشروع");
        return redirect(route("projects.index"));


    }
}
