<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipes;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipes = Recipes::latest()->paginate(9);

        return view('recipes.index', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipes;
        $recipe->title = $request->title;
        $recipe->materials = $request->materials;
        $recipe->method = $request->method;
        $recipe->save();
        return redirect('recipes/'.$recipe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipe)
    {
        //
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipes $recipe)
    {
        $recipe->title = $request->title;
        $recipe->materials = $request->materials;
        $recipe->method = $request->method;
        $recipe->save();
        return redirect('recipes/' . $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipes $recipe)
    {
        $recipe->delete();
        return redirect('recipes');
    }

    public function user() // 単数形
    {
        return $this->belongsTo('App\User');
    }
}
