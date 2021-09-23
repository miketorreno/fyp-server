<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function upload(Request $request){
            
        $request->validate([
           'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $photo = new Photo;

        if($request->file()) {
            $file_name = time().'_'.$request->file->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('business/photos', $file_name, 'public');

            $photo->business_id = $request->bid;
            // $photo->user_id = $request->user()->id;
            $photo->user_id = auth()->id();
            // $photo->caption = time().'_'.$request->file->getClientOriginalName();
            $photo->url = 'http://localhost:8000/storage/' . $file_path;
            $photo->save();

            return response()->json(['success'=>'Photo uploaded successfully.']);
        }
   }
}
