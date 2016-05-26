@include('layout')
  
{!! Form::open( array('url'=>'engagmentSummaryBeanList','method' => 'post','id' => 'create_form','class' => '')) !!}
  
@include('EngagmentSummaryBeanList.form', ['gosi' => $gosi])
  
<div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <input type="submit" name="save" class="btn">
    </div>
    {!! Form::close() !!}
      