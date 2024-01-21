<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Audience;
use App\Models\Campaign;
use App\Models\Recomendation;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    //
    public function index(Request $request) {

        $campaign_count=$request->user()->campaigns()->count();
        $audience_count=$request->user()->audiences()->count();
        $event_count=$request->user()->events()->count();
        $activity_count=$request->user()->activities()->count();

        $total_recomendations=null;
        $total_users=null;
        $total_activities=null;
        $total_events=null;
        $total_audiences=null;
        $total_campaigns=null;
        if(Gate::allows('admin')){
            $total_recomendations=Recomendation::count();
            $total_users=User::count();
            $total_activities=Activity::count();
            $total_events=Event::count();
            $total_audiences=Audience::count();
            $total_campaigns=Campaign::count();

        }

        return view('dashboard',
        ['user' => $request->user(),
         'campaigns_count'=>$campaign_count,
         'audiences_count'=>$audience_count,
         'events_count'=>$event_count,
         'activities_count'=>$activity_count,
         'total_recomendations'=>$total_recomendations,
         'total_users'=>$total_users,
            'total_activities'=>$total_activities,
            'total_events'=>$total_events,
            'total_audiences'=>$total_audiences,
            'total_campaigns'=>$total_campaigns,


        ]);
    }
}
