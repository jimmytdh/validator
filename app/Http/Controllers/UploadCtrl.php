<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadCtrl extends Controller
{
    public function index(Request  $request, $id){
        $status = null;
        if($id == 'complete'){
            $status = 'complete';
        }
        $method = $request->method();
        if($method=='POST'){
            $filename = $id;
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            if($extension == 'jpg'
                || $extension == 'JPGE'
                || $extension == 'JPG'
                || $extension == 'PDF'
                || $extension == 'PNG'
                || $extension == 'jpeg'
                || $extension == 'pdf'
                || $extension == 'png'){
                Storage::disk('public')->put("$filename.$extension", File::get($file));
                Personal::find($id)
                    ->update([
                        'status' => 'review'
                    ]);
                return redirect('/upload/complete');
            }else{
                return redirect()->back()->with('invalid',true);
            }
        }
        return view('upload',compact('status'));
    }

    public function complete(){
        $status = 'complete';
        return view('upload',compact('status'));
    }
}
