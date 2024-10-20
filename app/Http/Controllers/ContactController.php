<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function discord(){
        return redirect('https://discord.gg/VCRzVGmm7X');
    }
}
