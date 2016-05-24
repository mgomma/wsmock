<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Gosi;
use View;

class GosiController extends Controller
{

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
    {
      
      $item = Gosi::where('NIN', $id)->first();
      $data = View::make('Gosi.xml', $item);
      dd($data);

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
}

