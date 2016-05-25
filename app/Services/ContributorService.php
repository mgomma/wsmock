<?php

/**
 * Created by IntelliJ IDEA.
 * User: Mohamed Farghaly
 * Date: 24/05/16
 * Time: 11:25 م
 */

namespace App\Services;
use App\Http\Models\Gosi;
  
class ContributorService
{

    /**
     * @WebMethod
     *@return string $contributor @className=Contributor
     * @param type array Description
     * @link /test description
     */
    public function GetContributorSummary($param = []) {
        $item = new \stdClass();
        $item->GetContributorSummaryResult = (object)Gosi::where('NIN', '2147483647')->first()->toArray();
        return $item;
    }
}

class Contributor{


    /**
     * @type string
     * @link /test description
     */
    public $GetContributorSummaryResulttest;
  
    
}
