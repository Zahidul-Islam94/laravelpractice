<?php

namespace App\Http\Controllers;

use App\Models\MySkill;
use Illuminate\Http\Request;
use mysqli;

class MySkillController extends Controller
{
    function skillCreate(){
        $skill=MySkill::create([
            'language' => 'Ajax',
            'percentage' => '60'
        ]);
        if($skill){
            return "data insert successfull";
        }
        else{
            return "data insert not successfull";
        }
    }

    function skillManage(){
        $skill=MySkill::get();
        return 
    }
}
