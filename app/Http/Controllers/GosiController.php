<?php

namespace App\Http\Controllers;
use App\Http\Requests\GosiRequest;
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
    
    public function store(GosiRequest $request) {
      Gosi::create($request->all());
      return redirect('/gosi/');
    }
    
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Gosi::find($id);
      $item->engagmentSummaryBeanList;

      if(!$item){
        return 'Not found NIN';
      }else{
        $return = new \stdClass();
        $engagmentSummaryBeanList = $item->engagmentSummaryBeanList;

        unset($item->engagment_summary_bean_list);
        unset($item->engagmentSummaryBeanList);

        $return = $item;
        $return->engagmentSummaryBeanList = ['SimplifiedEngagmentSummaryBeanList' => 
        $engagmentSummaryBeanList];
        
        return $return;
      }
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

