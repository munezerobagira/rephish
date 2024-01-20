<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\Campaign;
$campaigns=[['id'=>1], ['id'=>2]];
class AudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Campaign $campaign)
    {
        $audience=$campaign->audiences()->paginate(10);
        return view("audience.index", ["audience"=>$audience, 'campaign'=>$campaign]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Campaign $campaign)
    {
        return view("audience.create", ['campaign'=>$campaign]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Campaign $campaign)
    {
        $attributes=request()->validate([
            'first_name'=>'required',
            'last_name'=>'string|nullable',
            'email'=>'email',
            'phone_number'=>'string|nullable',
            'whatsapp_number'=>'string|nullable',
            'facebook_handler'=>'string|nullable',
            'twitter_handler'=>'string|nullable',
        ]);
        $attributes['campaign_id']=$campaign->id;
        Audience::create($attributes);
        return redirect()->route('audience.index', ['campaign'=>$campaign->id])->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show( Campaign $campaign, Audience $audience,)
    {
        //
        return view("audience.show",['campaign'=>$campaign, 'audience'=>$audience]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign, Audience $audience)
    {
        return view("audience.show",['campaign'=>$campaign, 'audience'=>$audience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Campaign $campaign, Audience $audience)
    {
        //
        $attributes=request()->validate([
            'first_name'=>'required',
            'last_name'=>'string|nullable',
            'email'=>'email',
            'phone_number'=>'string|nullable',
            'whatsapp_number'=>'string|nullable',
            'facebook_handler'=>'string|nullable',
            'twitter_handler'=>'string|nullable',
        ]);
        $audience->update($attributes);
        return redirect()->route('audience.show', ['campaign'=>$campaign->id, 'audience'=>$audience->id])->with('success','Updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audience $audience)
    {
        //
    }
}
