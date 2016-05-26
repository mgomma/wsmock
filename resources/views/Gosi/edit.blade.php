@extends('template')

@section('content')
  <h1>Edit Gosi</h1>
  <hr/>
  {!! Form::model($item,['method'=>'PATCH','action'=>['GosiController@update',  $item->NIN] , 'id' => 'create_form', 'class' => '']) !!}

  @include('errors.form_error')
  @include('Gosi.form')

  <?php $gosi = [$item->NIN];

  if(!isset($item->engagmentSummaryBeanList)){
    $item->engagmentSummaryBeanList = [];
  }else{
    $item->engagmentSummaryBeanList[] = [];
  }

  foreach($item->engagmentSummaryBeanList as $key => $item):
  ?>

  @include('EngagmentSummaryBeanList.form')

  <?php endforeach;?>

  {!! Form::close() !!}

@stop


