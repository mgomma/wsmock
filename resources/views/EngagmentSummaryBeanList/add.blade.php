@include('layout')

{!! Form::open( array('url'=>'engagmentSummaryBeanList','method' => 'post','id' => 'create_form','class' => '')) !!}
 
@include('EngagmentSummaryBeanList.form', ['gosi' => $gosi])
 
<input type="submit" name="save" class="btn">

{!! Form::close() !!}

  