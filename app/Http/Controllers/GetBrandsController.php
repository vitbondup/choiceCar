<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class GetBrandsController extends Controller
{
    public function index(){
        return view('index', ['ar'=>Brands::all()]);
    }
}
