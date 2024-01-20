<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecampaignRequest;
use App\Http\Requests\UpdatecampaignRequest;
use App\Models\campaign;
use Illuminate\View\View;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $campaigns=[['id'=>1], ['id'=>2]];
        return view('campaign.index',["campaigns"=>$campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaign.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecampaignRequest $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(string $compaign)
    {
        return view('campaign.show', ['campaign'=>['id'=>$compaign]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecampaignRequest $request, campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(campaign $campaign)
    {
        //
    }
}
