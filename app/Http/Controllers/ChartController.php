<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function chart(Request $req){
    
        // $result = UserInfo::where('salary','>','0')->get('salary');
         $salary_objects=DB::table('userinfo')->select('name','salary')->get()->toArray();
         $result['salaries'] = array_map(function($o) { return $o->salary; }, $salary_objects);
         $result['names']=array_map(function($o) { return $o->name; }, $salary_objects)  ;
         //  echo $result;
        //  print_r($result);     //   

        
        
        
        
        
        return view('chart',$result);

    }
}
