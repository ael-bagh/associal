<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use App\Models\activities;

class HomeController extends Controller
{
    public function index()
    {
        $activities = activities::orderBy('id', 'desc')->take(3)->get();
        $articles = articles::orderBy('id', 'desc')->take(3)->get();
        return view('wecomee')->with(['activities'=>$activities])->with(['articles'=>$articles]);
    }
}
