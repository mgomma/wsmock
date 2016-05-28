@extends('template')

@section('content')

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
  <p>
  @include('EngagmentSummaryBeanList.form')

  <?php endforeach;?>
  </p>
  <div class="form-group">
      {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
  </div>

  {!! Form::close() !!}

@stop


