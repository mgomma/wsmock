
  {!! Form::model($item,['method'=>'PATCH','action'=>['GosiRequestController@update',$trainee->id] , 'id' => 'create_form', 'class' => 'form-inline']) !!}

  @include('Gosi.form')


  {!! Form::close() !!}

  