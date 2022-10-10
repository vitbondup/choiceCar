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

    public function store(Request $request) {
        $history = new History;
        $m=Brand::find($request->input('chois-brand'));
        $history->brand=$m->brand;
        $m=Mod::find($request->input('chois-model'));
        $history->model=$m->model;
        $history->save();

        return redirect()->route('get_brands')->with('message','Дані успішно збережено!');
   }
}
