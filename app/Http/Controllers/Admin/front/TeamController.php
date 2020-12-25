<?php

namespace App\Http\Controllers\Admin\front;

use App\Http\Requests\FrontEnd\Team\CreateRequest;
use App\Http\Requests\FrontEnd\Team\EditRequest;
use App\Models\front\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id');

        $this->search = [
            'name' =>\request()->get('name') ,
        ];

        if ($this->search['name']){
            $teams->where('name' , 'like' , "%{$this->search['name']}%");
        }
        $teams=$teams->paginate(10)->appends($this->search);
        return view('frontend.team.index')->with('teams',$teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.team.create');
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

        Team::create($request->all());

        session()->flash('msg', "s: تم الإضافة بنجاح");
        return redirect(route('teams.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = Team::find($id);

        if ($teams == null) {
            session()->flash('msg', 'w:غير موجود ');
            return redirect(route('teams.index'));
        } else {

            return view('frontend.team.show')->with('teams', $teams);
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
        $team = Team::find($id);



        if($team==null){
            session()->flash("msg", " غير موجود ");
            return redirect(route("teams.index"));
        }
        return view("frontend.team.edit")->withteam($team);

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

        Team::find($id)->update($request->all());
        session()->flash("msg", "تم تحديثه ");
        return redirect(route("teams.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Team::destroy($id);
        session()->flash("msg", "w:تم حذفه  ");
        return redirect(route("teams.index"));


    }
}
