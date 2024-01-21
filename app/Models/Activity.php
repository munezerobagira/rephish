<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function audience(){
        return $this->belongsTo(Audience::class);
    }
    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }
    public function event(){
        return $this->belongsTo(Event::class);}

}
