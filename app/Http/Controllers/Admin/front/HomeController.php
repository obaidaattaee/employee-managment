<?php

namespace App\Http\Controllers\Admin\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\front\Mmcompany;
use App\Models\front\Slide;
use App\Models\front\Service;
use App\Models\front\About;
use App\Models\front\Project;
use App\Models\front\Team;
use App\Models\front\Package;

class HomeController extends Controller
{

    public function index()
    {
        $companys=Mmcompany::get();
        $slides=Slide::get();
        $services=Service::get();
        $abouts=About::get();
        $projects=Project::get();
        $teams=Team::get();
        $packages=Package::get();

        return view('frontend.layouts.index')->with('companys',$companys)->with('slides',$slides)->with('services',$services)
                                             ->with('abouts',$abouts)->with('projects',$projects)
                                             ->with('teams',$teams)
                                             ->with('packages',$packages);
    }

}
