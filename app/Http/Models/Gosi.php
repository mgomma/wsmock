<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\EngagmentSummaryBeanList;

class Gosi extends Model
{
    protected $table = 'gosi';
    public $timestamps = false;
    public $primaryKey = 'NIN';

    protected  $fillable = [
        'NIN',
        'contributorFirstName',
        'contributorThirdName',
        'contributorLastName',
        'contributorSecondName',
        'nationalityCode',
        'newNINumber',
        'sex',
        'socialInsuranceNumber',
        'specifiedDate',
    ];
    
    public function engagmentSummaryBeanList() {
      return $this->hasMany(EngagmentSummaryBeanList::class, 'gosi_id', 'NIN');
    }
}
