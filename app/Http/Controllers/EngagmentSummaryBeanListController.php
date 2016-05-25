<?php

namespace App\Http\Controllers;
use App\Http\Models\EngagmentSummaryBeanList;
use App\Http\Requests\EngagmentSummaryBeanListRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Gosi;
use View;

class EngagmentSummaryBeanListController extends Controller
{
  public function index() {
    $engagmentSummaryBeanList = EngagmentSummaryBeanList::all();
    return view('EngagmentSummaryBeanList.index', compact('engagmentSummaryBeanList'));
  }
    
    public function create() {
      $gosi = Gosi::lists('NIN', 'NIN');
      return view('EngagmentSummaryBeanList.add', compact('gosi'));
    }
    
    public function store(EngagmentSummaryBeanListRequest $request ) {
      EngagmentSummaryBeanList::create($request->all());
      return redirect('/engagmentSummaryBeanList/');
    }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {


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

