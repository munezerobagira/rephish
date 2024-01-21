<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function audiences(){
        return $this->hasMany(Audience::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function activities(){
        return $this->hasMany(Activity::class, Audience::class);
    }
}
