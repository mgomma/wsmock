<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Gosi;
use View;
use Log;
use DB;
use Symfony\Component\HttpFoundation\Response;

class GosiController extends Controller
{

  public function __construct() {
          
    Log::info('fff  srewrew');

    //send the wsdl 
    if(isset($_GET['wsdl'])){
      $this->soap('Gosi.wsdl');
    }
  }
  
  
  public function index() {
    $gosi = Gosi::all();
    return view('Gosi.index', compact('gosi'));
    }
    
    public function create() {
      return view('Gosi.add');
    }
    
    public function store(Request $request ) {
      $arr = ['NIN' => $request->input('NIN'),
              'contributorFirstName' => $request->input('contributorFirstName'),
              'contributorThirdName' => $request->input('contributorThirdName'),
              'contributorLastName' => $request->input('contributorLastName'),
              'contributorSecondName' => $request->input('contributorSecondName'),
              'nationalityCode' => $request->input('nationalityCode'),
              'newNINumber' => $request->input('newNINumber'),
              'sex' => $request->input('sex'),
              'socialInsuranceNumber' => $request->input('socialInsuranceNumber'),
              'specifiedDate' => $request->input('specifiedDate'),
              ];
      
      Gosi::create($arr);
      return view('Gosi.add');
    }
    
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { Log::info('fff  srewrew');
      $item = Gosi::where('NIN', $id)->first();

      $item = ['NIN' => $id,
              'contributorFirstName' => 'test 123',
              'contributorThirdName' => 'test 123',
              'contributorLastName' => 'test 123',
              'contributorSecondName' => 'test 123',
              'nationalityCode' => 'test 123',
              'newNINumber' => 'test 123',
              'sex' => 1,
              'socialInsuranceNumber' => 'test 123',
              'specifiedDate' => 'test 123',
              ];
      if(!$item){
        return 'Not found NIN';
      }
      $this->soap('Gosi.xml', $item);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * send xml response to simulate soap response
     * @param type $param
     */
    public function soap($view_name, $item = []) {
      $content = View::make($view_name, $item);
         
      $response = new Response();
      $response->headers->set("Content-Type","text/xml; charset=utf-8");
      
      $response->setContent($content);
      $response->send();
      exit;
    }
}

