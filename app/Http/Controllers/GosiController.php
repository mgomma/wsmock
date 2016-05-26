<?php

namespace App\Http\Controllers;
use App\Http\Requests\GosiRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Gosi;
use App\Http\Models\EngagmentSummaryBeanList;
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
        $item = Gosi::find($id);
        $item->engagmentSummaryBeanList;

        if(!$item){
        return 'Not found NIN';
      }else{
        return view('Gosi.edit', compact('item'));
      }
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
      $engagmentSummaryBeanList = $request->input('engagmentSummaryBeanList');
      $item = [
          'NIN' => trim($request->input('NIN')),
          'contributorFirstName' => trim($request->input('contributorFirstName')),
          'contributorThirdName' => trim($request->input('contributorThirdName')),
          'contributorLastName' => trim($request->input('contributorLastName')),
          'contributorSecondName' => trim($request->input('contributorSecondName')),
          'nationalityCode' => $request->input('nationalityCode'),
          'newNINumber' => $request->input('newNINumber'),
          'sex' => $request->input('sex'),
          'socialInsuranceNumber' => $request->input('socialInsuranceNumber'),
          'specifiedDate' => $request->input('specifiedDate'),
          ];
      
      $gosi = Gosi::find($item['NIN']);
      $gosi->update($item);
//dd($engagmentSummaryBeanList);
      foreach ($engagmentSummaryBeanList as $engagmentSummaryBeanListItem){
        $engagmentSummaryBeanListItem['establishmentNameArb'] = trim($engagmentSummaryBeanListItem['establishmentNameArb']);
        
        if(isset($engagmentSummaryBeanListItem['delete']) && !empty($engagmentSummaryBeanListItem['id'])){
          EngagmentSummaryBeanList::destroy(trim($engagmentSummaryBeanListItem['id']));
          continue;
        }
        else if(empty($engagmentSummaryBeanListItem['id']) && !empty($engagmentSummaryBeanListItem['joiningDate'])){
          $engagmentSummaryBeanListItem['gosi_id'] = $item['NIN'];

          unset($engagmentSummaryBeanListItem['id']);
          EngagmentSummaryBeanList::create($engagmentSummaryBeanListItem);
        }else{
              $eng = EngagmentSummaryBeanList::where('id' , $engagmentSummaryBeanListItem['id'])->first();
              if($eng){
                $eng->update($engagmentSummaryBeanListItem);  
              }
        }

        }
        return redirect('/gosi/edit/'.$item['NIN']);
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
}

