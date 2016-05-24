
{!! Form::open( array('url'=>'gosi','method' => 'post','id' => 'create_form','class' => '')) !!}
 
@include('Gosi.form')
 
<input type="submit" name="save">

{!! Form::close() !!}

  