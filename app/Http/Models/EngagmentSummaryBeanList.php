<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Gosi;


class EngagmentSummaryBeanList extends Model
{
    protected $table = 'engagmentSummaryBeanList';
    public $timestamps = false;
    
    public $primaryKey = 'id';
    protected  $fillable = [
        'gosi_id',
        'engagementStatus',
        'establishmentNameArb',
        'joiningDate',
        'joiningDateEntFmt',
        'leavingDate',
        'leavingDateEntFmt',
        'molEstId',
        'molEstOfficeId',
        'registrationNumber',
        'wage',
        'wageStatus',
    ];
    
     public function gosi() {
      return $this->belongsTo(Gosi::class, 'NIN');
    }
}
