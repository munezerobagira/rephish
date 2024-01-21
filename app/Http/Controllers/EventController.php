<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(Campaign $campaign)
    {
        $events=$campaign->events()->paginate(10);
        return view("event.index", ["events"=>$events, 'campaign'=>$campaign]);
    }


    public function create(Campaign $campaign)
    {
        return view("event.create", ['campaign'=>$campaign]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Campaign $campaign)
    {
        $attributes=request()->validate([
            'name'=>'string|required',
            'category'=>'string|required',
            'frequency'=>'string|required',
            'content'=>'string|nullable',
            'redirect_url'=>'string|nullable',
            'time'=>'required',
        ]);
        $attributes['campaign_id']=$campaign->id;
        //generate  a code 8 code
        $attributes['code']=substr(md5(uniqid(rand(), true)), 0, 8);
        Event::create($attributes);
        return redirect()->route('event.index', ['campaign'=>$campaign->id])->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show( Campaign $campaign,Event $event,)
    {
        $auidences=$campaign->audiences()->paginate(3);
        return view("event.show",["campaign"=>$campaign, "event"=>$event, "audiences"=>$auidences]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign,Event $event)
    {
        //
        return view("event.edit", ['id'=>$campaign]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Campaign $campaign, Event $event)
    {
        //
        $attributes=request()->validate([
            'name'=>'string|required',
            'category'=>'string|required',
            'frequency'=>'string',
            'content'=>'string|nullable',
            'redirect_url'=>'string|nullable',
            'time'=>'required',
        ]);
        $event->update($attributes);
        return view("event.show",['campaign'=>$campaign, "event"=>$event]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign, Event $event)
    {
        //
        $event->delete();
        return redirect()->route('event.index', ['campaign'=>$campaign->id])->with('success','');
    }
    //
}
