<?php

namespace App\Http\Controllers;

use App\Models\front\About;
use App\Models\front\Mmcompany;
use App\Models\front\Package;
use App\Models\front\Project;
use App\Models\front\Service;
use App\Models\front\Slide;
use App\Models\front\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companys=Mmcompany::get();
        $slides=Slide::get();
        $services=Service::get();
        $abouts=About::get();
        $projects=Project::get();
        $teams=Team::get();
        $packages=Package::get();
        // dd($companys);
        return view('welcome')
                    ->with('companys',$companys)
                    ->with('slides',$slides)
                    ->with('services',$services)
                    ->with('abouts',$abouts)
                    ->with('projects',$projects)
                    ->with('teams',$teams)
                    ->with('packages',$packages);


        // return view('home');
    }
}
