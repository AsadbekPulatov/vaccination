<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public function download()
    {
        $vaccinations = Vaccination::orderby('id', 'DESC')->get();
        return view('admin.vaccinations.download', [
            'vaccinations' => $vaccinations
        ]);
//        dd(1);
//        $vaccinations = Vaccination::orderby('id','DESC')->get();
//        $pdf = Pdf::loadView('admin.vaccinations.index', compact('vaccinations'));
//        return $pdf->download('file.pdf');
    }
}
