<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecomendationRequest;
use App\Http\Requests\UpdaterecomendationRequest;
use App\Models\recomendation;

class RecomendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recomendations=Recomendation::all()->paginate(10);
        return view('recomendation.index',["recomendations"=>$recomendations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('recomendation.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $attributes=request()->validate([
            'content'=> 'required',
            'activity'=> 'required'
        ]);
       $recomendation=Recomendation::create($attributes);
        return view('recomendation.show',["recomendation"=>$recomendation]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recomendation $recomendation)
    {
        return view('recomendation.index', ['recomendation'=>['id'=>$recomendation]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recomendation $recomendation)
    {
        return view('recomendation.index', ['recomendation'=>['id'=>$recomendation]]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Recomendation $recomendation)
    {
        $attributes=request()->validate([
            'content'=> 'required',
            'activity'=> 'required'
        ]);
       $recomendation->update($attributes);

        return view('recomendation.show',["recomendation"=>$recomendation]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recomendation $recomendation)
    {
        $recomendation->delete();
        return view('recomendation.index');
    }
}
