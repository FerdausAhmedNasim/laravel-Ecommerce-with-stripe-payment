<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorModeController extends Controller
{
    
    public function toggle()
    {
        $mode = session('mode') === 'dark' ? 'light' : 'dark';
        session(['mode' => $mode]);

        return redirect()->back()->with([
            'message' => 'Mode changed to ' . $mode,
            'alert-type' => 'success'
        ]);
    }
}
