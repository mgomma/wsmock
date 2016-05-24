<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class engagmentSummaryBeanList extends Model
{
    protected $table = 'engagmentSummaryBeanList';
    public $timestamps = false;
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
}
