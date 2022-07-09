<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Resources\FoodResource;

class FoodController extends Controller
{
    //
    public function index(){
        $foods = Food::all();
        return new FoodResource(true, 'Data Foods', $foods);
    }
}
