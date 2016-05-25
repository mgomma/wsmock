<?php

/**
 * Created by IntelliJ IDEA.
 * User: Mohamed Farghaly
 * Date: 24/05/16
 * Time: 11:25 م
 */

namespace App\Services;

class ContributorService
{

    /**
     * @WebMethod
     *@return  wrapper[] $contributor @className=App\Services\Contributor
     */
    public function GetContributorSummary() {

        $contributors=[];

        $contributor = new Contributor();
        $contributor->id = 1;
        $contributor->fname = "Mohamed";

       $contributors[] = $contributor;
        $contributor = new Contributor();
        $contributor->id = 2;
        $contributor->fname = "Mido";

        $contributors[] = $contributor;

        return $contributors;
    }





}

class Contributor{


    /**
     * @type string
     */
    public $fname;
    /**
     * @type int
     */
    public $id;


}