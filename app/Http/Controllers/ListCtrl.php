<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class ListCtrl extends Controller
{
    public function index($status){
        $data = Personal::select('*');
        $title = "List of All Data";
        if($status == 'blank'){
            $data = $data->where('status','');
            $title = "List with Blank Status";
        }else if($status == 'inc'){
            $data = $data->where('status','inc');
            $title = "List with Incomplete Status";
        }else if($status == 'ready'){
            $data = $data->where('status','ready');
            $title = "Ready to submit list";
        }
        $data = $data->orderBy('first_name')->paginate(30);

        return view("list",compact('data','title'));
    }
}
