<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $data = array(
            "title" => "Welcome to Elcom"
        );
        return view('pages.index')->with($data);
    }

    public function howTo() {
        $data = array(
            "title" => "How to do stuff"
        );
        return view('pages.howTo')->with($data);
    }

    public function about() {
        $data = array(
            "title" => "About Us"
        );
        return view('pages.about')->with($data);
    }
}
