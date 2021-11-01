<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionCtrl extends Controller
{

    static function category(){
        $path = public_path('data/category.csv');
        $data = array();
        $delimiter = ",";
        $header = "null";
        if (($handle = fopen($path, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$row[0])
                    break;

                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }

    static function IndigenousMember(){
        $path = public_path('data/indigenous.csv');
        $data = array();
        $delimiter = ",";
        $header = "null";
        if (($handle = fopen($path, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$row[0])
                    break;

                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }
}
