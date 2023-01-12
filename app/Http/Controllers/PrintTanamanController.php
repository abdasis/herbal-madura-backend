<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf;

class PrintTanamanController extends Controller
{
    public function print($slug)
    {
        $tanaman = Tanaman::where('slug', $slug)->first();
        $pdf = \PDF::loadView('prints.tanaman',[
            'tanaman' => $tanaman
        ]);
        $pdf->inline();
    }
}
