<?php

namespace App\Http\Controllers;

use App\Calorie;
use Illuminate\Http\Request;

class AllController extends Controller
{
    /**
     * all view from storage.
     */
    public function all()
    {
       $kcals = Calorie::all();
       $items = Calorie::Selectraw("sum(protein) as total_protein,sum(carbohydrate) as total_carbohydrate,
        sum(fat) as total_fat")->get();
        return view('kcalapp.all ', compact('kcals'), compact('items'));
    }
}
