<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }
    public function activities(){
        return $this->hasMany(Activity::class);
    }

}
