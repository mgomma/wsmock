<?php

namespace App\Http\Controllers;

class SOAPController extends Controller
{
    public function serve(\soap_server $server)
    {
        $url = action('SOAPController@serve');
        $namespace = $url.'?wsdl';
        $server->configureWSDL('GOSI', $namespace, $url);

        $server->register('GetContributorSummary',
            [
                'DocumentID'      => 'xsd:integer',
                'PmtRefNum'       => 'xsd:integer',
                'BankPmtRefNum'   => 'xsd:integer',
                'BenIBAN'         => 'xsd:integer',
                'PmtAmt'          => 'xsd:decimal',
                'RejectionReason' => 'xsd:string',
                'RejectionDt'     => 'xsd:date',
            ],
            [
                'DocumentID'    => 'xsd:integer',
                'StatusCode'    => 'xsd:integer',
                'StatusDetails' => 'xsd:string',
            ]
        );

        $server->service(file_get_contents('php://input'));
    }
}
