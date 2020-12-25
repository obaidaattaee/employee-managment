<?php

namespace App\Http\Controllers\Admin\front;

use App\Models\front\EmpReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\front\Mmcompany;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreEmpReportsRequest;
use App\User;

class EmpReportController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('checkEmp');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys=Mmcompany::get();
        $emos = User::where('type_id','4')->get();

        return view('frontend.layouts.emp')->with('companys',$companys)->with('emos',$emos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companys=Mmcompany::get();
        $emos = User::where('type_id','4')->get();

        return view('frontend.layouts.emp')->with('companys',$companys)->with('emos',$emos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpReportsRequest $request)
    {
        dd($request);
        $image = basename($request->imageFile->store("public"));
        $request['imageFile'] = $image;

        $s = EmpReport::create($request->all());
        Session::flash("msg","تمت اضافة التقرير بنجاح");
        redirect()->route('emp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmpReport  $empReport
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmpReport  $empReport
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpReport  $empReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpReport $empReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpReport  $empReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpReport $empReport)
    {
        //
    }

    public function ss(StoreEmpReportsRequest $request)
    {
        dd($request);
        $image = basename($request->imageFile->store("public"));
        $request['imageFile'] = $image;

        EmpReport::create($request->all());
        Session::flash("msg","تمت اضافة التقرير بنجاح");
        return redirect()->route('emp.index');
    }

}
