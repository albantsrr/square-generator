<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index( Request $request)
    {


        $link = $request->input('url');;

        if($link === null)
        {
            $link = "https://getbootstrap.com";
        }


        return view('home', [
            'link' => $link
        ]);
    }



}
