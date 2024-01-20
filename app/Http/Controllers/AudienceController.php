<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAudienceRequest;
use App\Http\Requests\UpdateAudienceRequest;
use App\Models\Audience;
$campaigns=[['id'=>1], ['id'=>2]];
class AudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $campaign)
    {
        return view("audience.index", ["campaign"=>['id'=>$campaign]]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $campaign)
    {
        return view("audience.create", ['campaign'=>['id'=>$campaign]]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAudienceRequest $request, string $campaign)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Audience $audience, string $campaign)
    {
        //
        return view("audience.show",['campaign'=>['id'=>$campaign]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Audience $audience, string $campaign)
    {
        //
        return view("audience.edit", ['id'=>$campaign]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAudienceRequest $request, Audience $audience,string $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audience $audience)
    {
        //
    }
}
