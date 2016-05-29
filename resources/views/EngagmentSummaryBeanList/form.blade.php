<!--NIN-->
<div class="container">
    <div class="row col-sm-12">
        <h1>Job Details</h1>
          <hr/>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 @if(isset($gosi))       
<div class="form-group is-empty col-md-4 hidden">
    <label class="control-label">NIN</label>

    <div class="form-group is-empty col-md-4">
    {!! Form::select('gosi_id', $gosi , array('class' => 'form-control')) !!}
    </div>

    <span class="material-input"></span>
</div>
 @endif

<?php $key = isset($key) ? $key : 0; if(isset($item) && isset($item->id)): ?>

 <div class="form-group is-empty col-md-4">
    <label class="control-label">delete	</label>
    <input type="checkbox" name="engagmentSummaryBeanList[{{$key}}][delete]" value="">
</div>
 <?php endif; ?>

 <input type="hidden" name="engagmentSummaryBeanList[{{$key}}][id]" value="@if(isset($item->id)){{$item->id}}@endif">
<!--engagementStatus-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">engagementStatus	</label>
    <select name="engagmentSummaryBeanList[{{$key}}][engagementStatus]" class="form-control">
        @foreach([1=>1,2=>2,3=>'Active In GOSI',4=>4,5=>5,6=>'Not Active In GOSI'] as $k => $v)
            <option value="{{ $k }}" <?php echo ((isset($item->engagementStatus)) && $k == $item->engagementStatus)?"selected":""; ?>>{{ $v }}</option>
        @endforeach
    </select>
    <span class="material-input"></span>
</div>

<!--establishmentNameArb-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">establishmentNameArb	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][establishmentNameArb]" class="form-control width-lg"
           value="@if(isset($item->establishmentNameArb)){{$item->establishmentNameArb}}@endif">
    <span class="material-input"></span>
</div>

<!--joiningDate-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">joiningDate	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][joiningDate]" class="form-control width-lg"
           value="@if(isset($item->joiningDate)){{$item->joiningDate}}@endif">
    <span class="material-input"></span>
</div>

<!--joiningDateEntFmt-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">joiningDateEntFmt	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][joiningDateEntFmt]" class="form-control width-lg"
           value="@if(isset($item->joiningDateEntFmt)){{$item->joiningDateEntFmt}}@endif">
    <span class="material-input"></span>
</div>

<!--leavingDate-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">leavingDate	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][leavingDate]" class="form-control width-lg"
           value="@if(isset($item->leavingDate)){{$item->leavingDate}}@endif">
    <span class="material-input"></span>
</div>

<!--leavingDateEntFmt-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">leavingDateEntFmt	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][leavingDateEntFmt]" class="form-control width-lg"
           value="@if(isset($item->leavingDateEntFmt)){{$item->leavingDateEntFmt}}@endif">
    <span class="material-input"></span>
</div>

<!--molEstId-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">molEstId	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][molEstId]" class="form-control width-lg" 
           value="@if(isset($item->molEstId)){{$item->molEstId}}@endif">
    <span class="material-input"></span>
</div>

<!--molEstOfficeId-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">molEstOfficeId	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][molEstOfficeId]" class="form-control width-lg"
           value="@if(isset($item->molEstOfficeId)){{$item->molEstOfficeId}}@endif">
    <span class="material-input"></span>
</div>

<!--registrationNumber-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">registrationNumber	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][registrationNumber]" class="form-control width-lg" 
           value="@if(isset($item->registrationNumber)){{$item->registrationNumber}}@endif">
    <span class="material-input"></span>
</div>

<!--wage-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">wage	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][wage]" class="form-control width-lg" 
           value="@if(isset($item->wage)){{$item->wage}}@endif">
    <span class="material-input"></span>
</div>

<!--wageStatus-->
<div class="form-group is-empty col-md-4">
    <label class="control-label">wageStatus	</label>
    <input type="text" name="engagmentSummaryBeanList[{{$key}}][wageStatus]" class="form-control width-lg" 
           value="@if(isset($item->wageStatus)){{$item->wageStatus}}@endif">
    <span class="material-input"></span>
</div>
</div>
</div>