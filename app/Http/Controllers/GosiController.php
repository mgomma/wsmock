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
     $gosi = new Gosi;

    if(request()->input('NIN')){
          $gosi = $gosi->where('NIN','like', request()->input('NIN'));
     }

     if(request()->input('Name')){
          $gosi = $gosi->where('contributorFirstName','like', request()->input('Name'));
     }

      if(request()->input('Nationality')){
          $gosi = $gosi->where('nationalityCode','like', request()->input('Nationality'));
     }

     if(request()->input('Gender')){
          $gosi = $gosi->where('sex','like', request()->input('Gender'));
     }

     if(request()->input('socialInsuranceNumber')){
          $gosi = $gosi->where('socialInsuranceNumber','like', request()->input('socialInsuranceNumber'));
     }


    $gosi = $gosi->paginate(10);
    return view('Gosi.index', compact('gosi'));
    }
    
    public function create() {
      return view('Gosi.add');
    }
    
    public function store(GosiRequest $request) {
        $input = $request->all();
        $input['newNINumber'] = $input['NIN'];
        
      Gosi::create($input);
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

      $item->contributorFirstName = base64_encode($item->contributorFirstName);
      $item->contributorThirdName = base64_encode($item->contributorThirdName);
      $item->contributorLastName = base64_encode($item->contributorLastName);
      $item->contributorSecondName = base64_encode($item->contributorSecondName);
      
      if(!$item){
        return 'Not found NIN';
      }else{
        $return = new \stdClass();
        $engagmentSummaryBeanList = $item->engagmentSummaryBeanList;

        unset($item->engagment_summary_bean_list);
        unset($item->engagmentSummaryBeanList);

        $return = $item;
        
        foreach ($engagmentSummaryBeanList as $value) {
          $value['establishmentNameArb'] = base64_encode($value['establishmentNameArb']);
        }
        
        $return->engagmentSummaryBeanList = ['SimplifiedEngagmentSummaryBeanList' => $engagmentSummaryBeanList];
        
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
          'contributorFirstName' => $request->input('contributorFirstName'),
          'contributorThirdName' => $request->input('contributorThirdName'),
          'contributorLastName' => $request->input('contributorLastName'),
          'contributorSecondName' => $request->input('contributorSecondName'),
          'nationalityCode' => $request->input('nationalityCode'),
          'sex' => $request->input('sex'),
          'socialInsuranceNumber' => $request->input('socialInsuranceNumber'),
          'specifiedDate' => $request->input('specifiedDate'),
          ];
      
      foreach ($item as $key => $value) {
        $item[$key] = trim($value);
      }

      $gosi = Gosi::find($id);
      $gosi->update($item);

      foreach ($engagmentSummaryBeanList as $engagmentSummaryBeanListItem){
        foreach ($engagmentSummaryBeanListItem as $key => $value) {
          $engagmentSummaryBeanListItem[$key] = trim($value);
        }
        
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
        return redirect('/gosi');
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

