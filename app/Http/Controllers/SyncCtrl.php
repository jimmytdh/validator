<?php

namespace App\Http\Controllers;

use App\Personal;
use App\Vaccination;
use Illuminate\Http\Request;

class SyncCtrl extends Controller
{
    public function index(){
        $blank = Personal::where('status','')->count();
        $inc = Personal::where('status','inc')->count();
        $ready = Personal::where('status','ready')->count();
        $submit = Personal::where('status','submit')->count();
        $lastSync = Personal::orderBy('updated_at','desc')->first();
        $lastSync = date('M d, Y h:i A',strtotime($lastSync->updated_at));
        return view('sync',compact('blank','inc', 'ready', 'submit','lastSync'));
    }

    public function sync($status){
        if($status == 'blank'){
            $personal = Personal::where('status','')->get();
        }else if($status == 'inc'){
            $personal = Personal::where('status','inc')->get();
        }

        foreach($personal as $row){

            $dose1 = Vaccination::where('person_id',$row->id)->where('dose1','Y')->first();
            $dose2 = Vaccination::where('person_id',$row->id)->where('dose2','Y')->first();

            if($row->unique_person_id == "0" || $row->contact_no == ''){
                Personal::find($row->id)->update([
                    'status' => 'inc'
                ]);
                continue;
            }
            if($dose1){
                if($dose1->batch_no == '' || $dose1->vaccinator == ''){
                    Personal::find($row->id)->update([
                        'status' => 'inc'
                    ]);
                    continue;
                }
            }
            if($dose2){
                if($dose2->batch_no == '' || $dose2->vaccinator == ''){
                    Personal::find($row->id)->update([
                        'status' => 'inc'
                    ]);
                    continue;
                }
            }
            if($dose1 && $dose2){
                Personal::find($row->id)->update([
                    'status' => 'ready'
                ]);
            }else{
                Personal::find($row->id)->update([
                    'status' => 'inc'
                ]);
                continue;
            }


        }
        return redirect('/sync');
    }
}
