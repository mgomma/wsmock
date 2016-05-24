<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Gosi extends Model
{
    protected $table = 'gosi';
    protected $guarded = ['engagmentSummaryBeanList'];
    public $timestamps = false;
}
