<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function onDetected()
    {
        // dd($request);
        // $barcode_num = $request->resultNum;
        return view('barcode/after_reading');
    }
}
