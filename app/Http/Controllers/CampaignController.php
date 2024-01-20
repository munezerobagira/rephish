<?php

namespace App\Http\Controllers;
use App\Models\Campaign;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $campaigns = request()->user()->campaigns()->paginate(10);
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
    public function store()
    {
         $attributes=request()->validate([
            'name'=> 'required',
            'description'=> 'required',
            'start_date'=>'date',
            'end_date'=>'date'
         ]);
         $attributes['user_id']=request()->user()->id;

         Campaign::create($attributes);

        return redirect()->route('campaign.index')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        return view('campaign.show', ['campaign'=>$campaign]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        return view('campaign.show', ['campaign'=>['id'=>$campaign]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Campaign $campaign)
    {

        $attributes=request()->validate([
            'name'=> 'required',
            'description'=> 'required',
            'start_date'=>'date',
            'end_date'=>'date'
         ]);

         $campaign->update($attributes);
         return view('campaign.show', ['campaign'=>$campaign]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
         $campaign->delete();
         return redirect()->route('campaign.index')->with('success','');
        //
    }
}
