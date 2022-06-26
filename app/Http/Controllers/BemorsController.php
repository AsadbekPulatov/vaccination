<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bemor;

class BemorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $bemors = Bemor::orderby('id','DESC')->get();
        return view('bemor.home',[
            'bemors' => $bemors,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bemor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
      $bemors = new Bemor();
        $bemors->create([
            'familya' => $request['familya'],
            'ismi' => $request['ismi'],
            'otasining_ismi' => $request['otasining_ismi'],
            'tugilgan_sana' => $request['tugilgan_sana'],
            'millati' => $request['millati'],
            'yosh' => $request['yosh'],
            'tugilgan_joyi' => $request['tugilgan_joyi'],
            'guvohnoma_raqami' => $request['guvohnoma_raqami'],
            'manzili' => $request['manzil'],
            'onasini_ismi' => $request['onasini_ismi'],
            'tel_number' => $request['tel_number'],
            'kim_olib_keldi' => $request['kim_olib_keldi'],
        ]);

//        dd($request);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bemors = Bemor::find($id);
        return view('bemor.edit',[
            'bemors' => $bemors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bemors = Bemor::find($id);
        $bemors->update([
            'familya' => $request['familya'],
            'ismi' => $request['ismi'],
            'otasining_ismi' => $request['otasining_ismi'],
            'tugilgan_sana' => $request['tugilgan_sana'],
            'millati' => $request['millati'],
            'yosh' => $request['yosh'],
            'tugilgan_joyi' => $request['tugilgan_joyi'],
            'guvohnoma_raqami' => $request['guvohnoma_raqami'],
            'manzili' => $request['manzil'],
            'onasini_ismi' => $request['onasini_ismi'],
            'tel_number' => $request['tel_number'],
            'kim_olib_keldi' => $request['kim_olib_keldi'],
        ]);

//        dd($request);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
////        return redirect()->route('bemor.home');
//    }

public function destroy(Bemor $bemor)
{
    $bemor->delete();
    return redirect()->route('bemor.index');
}
}
