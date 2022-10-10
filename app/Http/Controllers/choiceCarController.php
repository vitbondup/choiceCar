<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\History;
use App\Models\Mod;
use Illuminate\Http\Request;

class choiceCarController extends Controller
{
    public function getBrands(){
        return view('index', ['ar1'=>Brand::all()]);
    }
    public function getModels($brand_id){
        return(Brand::find($brand_id)->models);
    }

}
