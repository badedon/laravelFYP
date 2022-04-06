<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventOne;

class Candidates extends Model
{
    protected $fillable = ['name','position','event_id','image'];

    public function event()
    {
        return $this->belongsTo(EventOne::class);
    }
}
