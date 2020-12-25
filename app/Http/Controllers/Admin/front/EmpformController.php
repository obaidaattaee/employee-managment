<?php

namespace App\Http\Controllers\Admin\front;

use App\Models\front\Empform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\front\Mmcompany;

class EmpformController extends Controller
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
    //     $companys=Mmcompany::get();

    //    return view('frontend.layouts.emp')->with('companys',$companys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empform  $empform
     * @return \Illuminate\Http\Response
     */
    public function show(Empform $empform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empform  $empform
     * @return \Illuminate\Http\Response
     */
    public function edit(Empform $empform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empform  $empform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empform $empform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empform  $empform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empform $empform)
    {
        //
    }
}
