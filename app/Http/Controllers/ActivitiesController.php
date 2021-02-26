<?php

namespace App\Http\Controllers;

use App\Models\activities;
use App\Models\pictures;
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
        return view("create.newactivity");
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
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
          ]);
        if($req->hasfile('imageFile')) {
            foreach($req->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData[] = $name;  
            }
            $activity = new activities;
            $activity->title = $req->title;
            $activity->date = $req->date;
            $activity->address = $req->address;
            $activity->ville = $req->ville;
            $imageName = time().'.'.$req->cover->extension();  
            $activity->cover = $imageName;
            $req->cover->move(public_path('images'), $imageName);
            $activity->save();
            $activity = activities::latest('created_at')->first();
            $fileModal = new pictures();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);
            $fileModal->activity_id = $activity->id;    
            $fileModal->save();
            return back()->with('success', 'File has successfully uploaded!');
        }
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = activities::find($id);
        $pictures = pictures::find($id);
        return view('show.showactivity')->with(['activity'=>$activity])->with(['pictures'=>$pictures]);
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
