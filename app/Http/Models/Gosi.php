<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Gosi extends Model
{
    protected $table = 'gosi';
    public $timestamps = false;

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
}
