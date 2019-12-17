<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function getIndex() {

        if (view()->exists('default.index')) {
            return view('default.index');
        }

    }

    public function getAbout() {

        if (view()->exists('default.about')) {
            return view('default.about');
        }

    }

    public function getNews() {

        if (view()->exists('default.news')) {
            return view('default.news');
        }

    }
}
