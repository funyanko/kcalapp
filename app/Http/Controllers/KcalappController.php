<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calorie;
use Illuminate\Support\Facades\Auth;

class KcalappController extends Controller
{

    public function __construct()
    {
        $this->calorie = new Calorie();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calories = $this->calorie->findAllCalories();
        $user = Auth::user();
        return view('kcalapp.index', compact('calories'), compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kcalapp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registerCalorie = $this->calorie->InsertCalorie($request);
        return redirect()->route('kcalapp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calorie = Calorie::find($id);

        return view('kcalapp.show', compact('calorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calorie = Calorie::find($id);

        return view('kcalapp.edit', compact('calorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calorie = Calorie::find($id);
        $updateCalorie = $this->calorie->updateCalorie($request, $calorie);

        return redirect()->route('kcalapp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 指定されたIDのレコードを削除
        $deleteCalorie = $this->calorie->deleteCalorieById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('kcalapp.index');
    }
    
}
