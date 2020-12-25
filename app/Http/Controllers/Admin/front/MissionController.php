<?php

namespace App\Http\Controllers\Admin\front;

use App\Http\Requests\FrontEnd\Mission\CreateRequest;
use App\Http\Requests\FrontEnd\Mission\EditRequest;
use App\Models\front\Mission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Session;
class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //rana
//        $missions = Mission::whereRaw('true')->orderBy('id','desc');
//
//        $missions = $missions->paginate(10);
//        return view('dashboard.indexbig', compact('missions'));

        //fatma

        $missions = Mission::orderBy('id');

        $this->search = [
            'name' =>\request()->get('name') ,
        ];

        if ($this->search['name']){
            $missions->where('name' , 'like' , "%{$this->search['name']}%");
        }
        $missions=$missions->paginate(10)->appends($this->search);
        return view('frontend.mission.index')->with('missions',$missions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        //rana
//        $missions = Mission::create($request->all());
//        \Session::flash("msg","Message sent succesfully");
//
//        return redirect()->route('users.index');
        //fatma

        Mission::create($request->all());

        session()->flash('msg', "s: تم الإضافة بنجاح");
        return redirect(route('missions.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $missions = Mission::find($id);

        if ($missions == null) {
            session()->flash('msg', 'w:غير موجود ');
            return redirect(route('missions.index'));
        } else {

            return view('frontend.mission.show')->with('missions', $missions);
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
        $mission = Mission::find($id);



        if($mission==null){
            session()->flash("msg", " غير موجود ");
            return redirect(route("missions.index"));
        }
        return view("frontend.mission.edit")->withmission($mission);

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
        Mission::find($id)->update($request->all());
        session()->flash("msg", "تم تحديثه ");
        return redirect(route("missions.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Mission::destroy($id);
        session()->flash("msg", "w:تم حذفه  ");
        return redirect(route("missions.index"));


    }
}
