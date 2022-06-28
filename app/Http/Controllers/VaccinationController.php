<?php

namespace App\Http\Controllers;

use App\Models\Bemor;
use App\Models\User;
use App\Models\Vaccination;
use App\Models\VaccinationInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request['id'];
//        dd($id);
        if (Auth::id() == 1)
            if ($id != NULL)
                $vaccinations = Vaccination::where('sick_id', $id)->orderby('id', 'DESC')->get();
            else $vaccinations = Vaccination::orderby('id', 'DESC')->get();
        else
            if ($id != NULL)
            $vaccinations = Vaccination::where('sick_id', $id)
                ->where('employee_id', Auth::id())->orderby('id', 'DESC')->get();
            else
                $vaccinations = Vaccination::where('employee_id', Auth::id())->orderby('id', 'DESC')->get();
        return view('admin.vaccinations.index', [
            'vaccinations' => $vaccinations,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bemorlar = Bemor::all();
        $xodimlar = User::where('id', '!=', 1)->get();
        $infos = VaccinationInfo::all();
        return view('admin.vaccinations.create', [
            'xodimlar' => $xodimlar,
            'infos' => $infos,
            'bemorlar' => $bemorlar,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vaccination $vaccination)
    {
//        dd($request);
        if (is_null($request->redate))
            $vaccination['redate'] = NULL;
        else
            $vaccination['redate'] = $request['redate'];
        $vaccination['sick_id'] = $request['sick_id'];
        if (Auth::id() == 1)
            $vaccination['employee_id'] = $request['employee_id'];
        else
            $vaccination['employee_id'] = Auth::id();
        $vaccination['info_id'] = $request['info_id'];
        $vaccination['blood'] = $request['blood'];
        $vaccination['temperature'] = $request['temperature'];
        $vaccination['status'] = $request['status'];
        $vaccination->save();
        return redirect()->route('admin.vaccinations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Vaccination $vaccination
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccination $vaccination)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Vaccination $vaccination
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccination $vaccination)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vaccination $vaccination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination $vaccination)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Vaccination $vaccination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination $vaccination)
    {
        $vaccination->delete();
        return redirect()->route('admin.vaccinations.index');
    }
}
