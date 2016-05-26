@include('layout')
  
  
{!! Form::open( array('url'=>'gosi','method' => 'post','id' => 'create_form','class' => '')) !!}
  
@include('Gosi.form')
  
<div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <input type="submit" name="save" class="btn">
    </div>
</div>
{!! Form::close() !!}
  
  