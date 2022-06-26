<?php

namespace App\Http\Controllers;

use App\Models\VaccinationInfo;
use Illuminate\Http\Request;

class VaccinationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccination_infos = VaccinationInfo::all();
        return view('admin.vaccination_infos.index', [
           'vaccination_infos' => $vaccination_infos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vaccination_infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, VaccinationInfo $vaccinationInfo)
    {
        $vaccinationInfo->create($request->all());
        return redirect()->route('admin.vaccination_infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaccinationInfo  $vaccinationInfo
     * @return \Illuminate\Http\Response
     */
    public function show(VaccinationInfo $vaccinationInfo)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaccinationInfo  $vaccinationInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(VaccinationInfo $vaccinationInfo)
    {
        return view('admin.vaccination_infos.edit', [
            'vaccinationInfo' => $vaccinationInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VaccinationInfo  $vaccinationInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VaccinationInfo $vaccinationInfo)
    {
        $vaccinationInfo->update($request->all());
        return redirect()->route('admin.vaccination_infos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaccinationInfo  $vaccinationInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaccinationInfo $vaccinationInfo)
    {
        $vaccinationInfo->delete();
        return redirect()->route('admin.vaccination_infos.index');
    }
}
