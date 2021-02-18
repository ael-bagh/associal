<?php

namespace App\Http\Controllers;

use App\Models\activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);
      
          if($req->hasfile('imageFile')) {
              foreach($req->file('imageFile') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $file->move(public_path().'/uploads/', $name);  
                  $imgData[] = $name;  
              }
      
              $fileModal = new Image();
              $fileModal->name = json_encode($imgData);
              $fileModal->image_path = json_encode($imgData);
              
             
              $fileModal->save();
      
             return back()->with('success', 'File has successfully uploaded!');
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(activities $activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(activities $activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activities $activities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(activities $activities)
    {
        //
    }
}
