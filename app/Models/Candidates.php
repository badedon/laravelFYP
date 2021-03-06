<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventOne;

class Candidates extends Model
{
    protected $fillable = ['name','position','event_id','image','vote'];
    public $sortable = ['name','position','event_id','vote'];

    public function event()
    {
        return $this->belongsTo(EventOne::class);
    }
}
