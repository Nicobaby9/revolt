<?php

namespace App\Http\Controllers\adminController;

use App\AboutCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutCompany::all()->first();
        return view('admin.about.index', compact('about'));
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
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutCompany $aboutCompany)
    {
        $about = AboutCompany::all()->first();
        $about->update($request->all());
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutCompany $aboutCompany)
    {
        //
    }
}
