<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Campaign;
use App\Models\Recomendation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $demo_user=User::factory()->create([
            'name' => 'Demo',
            'email' => 'demo@rephish.com',
            'password'=>Hash::make("password")
        ]);
        $another_user=User::factory()->create([
            'name' => 'Demo',
            'email' => 'demo2@rephish.com',
            'password'=>Hash::make("password")
        ]);


         User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@rephish.com',
            'password'=>Hash::make("password"),
            'role'=>'admin'
        ]);
        User::factory(7)->create();
        $demo_user->campaigns()->saveMany(Campaign::factory(12)->make());
        $another_user->campaigns()->saveMany(Campaign::factory(12)->make());

        //audience
        $demo_user->campaigns->each(function($campaign){
            $campaign->audiences()->saveMany(\App\Models\Audience::factory(12)->make());
        });
        $another_user->campaigns->each(function($campaign){
            $campaign->audiences()->saveMany(\App\Models\Audience::factory(12)->make());
        });
        $demo_user->campaigns->each(function($campaign){
            $campaign->events()->saveMany(\App\Models\Event::factory(12)->make());
        });
        $another_user->campaigns->each(function($campaign){
            $campaign->events()->saveMany(\App\Models\Event::factory(12)->make());
        });
        // $demo_user->campaigns->events->each(function($campaign){
        //     $campaign->activities()->saveMany(\App\Models\Activity::factory(12)->make());
        // });
        // $another_user->campaigns->each(function($campaign){
        //     $campaign->activities()->saveMany(\App\Models\Activity::factory(12)->make());
        // });

        Recomendation::factory(12)->create();


    }
}
