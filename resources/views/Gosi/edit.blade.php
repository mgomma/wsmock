
  {!! Form::model($item,['method'=>'PATCH','action'=>['GosiController@update',  $item->NIN] , 'id' => 'create_form', 'class' => 'form-inline']) !!}

 
  
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

  <div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <input type="submit" name="save" class="btn">
    </div>
</div>
  
  {!! Form::close() !!}

  