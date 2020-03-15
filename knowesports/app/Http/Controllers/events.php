<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class events extends Controller
{
    public function show(){
        return view('events.show');
    }

    public function show2(){
        return view('events.show2');
    }

    public function show3(){
        return view('events.show3');
    }

    public function rov1(){
        return view('events.readrov1');
    }

    public function rov2(){
        return view('events.readrov2');
    }

    public function rov3(){
        return view('events.readrov3');
    }

    public function lol1(){
        return view('events.readlol1');
    }

    public function lol2(){
        return view('events.readlol2');
    }

    public function lol3(){
        return view('events.readlol3');
    }

    public function dota1(){
        return view('events.readdota1');
    }

    public function dota2(){
        return view('events.readdota2');
    }

    public function dota3(){
        return view('events.readdota3');
    }
}
