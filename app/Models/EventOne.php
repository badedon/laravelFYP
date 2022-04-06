<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidates;

class EventOne extends Model
{

    protected $fillable = ['name','location','startdate','enddate'];

    public function candidates()
    {
        return $this->hasMany(Candidates::class);
    }
}
