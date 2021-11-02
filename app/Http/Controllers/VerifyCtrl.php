<?php

namespace App\Http\Controllers;

use App\Muncity;
use App\Personal;
use App\Province;
use App\Region;
use App\Vaccination;
use Illuminate\Http\Request;

class VerifyCtrl extends Controller
{
    public function verifyData(Request $request){
        $where = array(
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'birthdate' => $request->birthdate,
        );
        $person = Personal::where($where)->first();
        $dose1 = Vaccination::where('person_id',$person->id)
                    ->where('dose1','Y')
                    ->first();
        $dose2 = Vaccination::where('person_id',$person->id)
            ->where('dose2','Y')
            ->first();

        if($person){
            return view('page.verify_data', compact('person','dose1','dose2'));
        }
        return view('errors.no_data');
    }

    public static function address($person){
        $muncity = self::muncity($person->muncity);
        $province = self::province($person->province);
        $region = self::region($person->region);

        return "$muncity, $province, $region";
    }
    public static function region($code){
        return $code;
    }
    public static function province($code){
        return Province::where('linelistCode',$code)->first()->provDesc;
    }

    public static function muncity($code){
        return Muncity::where('linelistCode',$code)->first()->citymunDesc;
    }
}
