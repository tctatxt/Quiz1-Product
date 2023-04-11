<?php

namespace App\Http\Controllers;
use App\Models\FoodModel;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $arrmahasiswa = [
            [
                "title"=>"Sushi",
            ],
        ];
        return view('home', compact('arrmahasiswa'));
    }
}
