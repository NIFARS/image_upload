<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageupload(){
        return view('image_upload');
    }

    public function imageuploadpost(Request $request){

        $request->validate([
            'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $imageName =time().'.'.$request->image->extension();

        $request->image->move(public_path('images'),$imageName);


        return back()
        ->withSuccess('You have  successfully  uploaded  the image!')
        ->withImageName($imageName);


    }
}
