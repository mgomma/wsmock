<!--NIN-->	
<div class="form-group is-empty">
    <label class="control-label">NIN</label>
    <select name="gosi_id">
        @foreach($gosi as $nin)
            <option value="{{ $nin }}">{{ $nin }}</option>
        @endforeach
    </select>
    <span class="material-input"></span>
</div>

<!--engagementStatus-->
<div class="form-group is-empty">
    <label class="control-label">engagementStatus	</label>
    <input type="text" name="engagementStatus" class="form-control width-lg" value="">
    <span class="material-input"></span>
</div>

<!--establishmentNameArb-->
<div class="form-group is-empty">
    <label class="control-label">establishmentNameArb	</label>
    <input type="text" name="establishmentNameArb" class="form-control width-lg"
           value="">
    <span class="material-input"></span>
</div>

<!--joiningDate-->
<div class="form-group is-empty">
    <label class="control-label">joiningDate	</label>
    <input type="text" name="joiningDate" class="form-control width-lg"
           value="">
    <span class="material-input"></span>
</div>

<!--joiningDateEntFmt-->
<div class="form-group is-empty">
    <label class="control-label">joiningDateEntFmt	</label>
    <input type="text" name="joiningDateEntFmt" class="form-control width-lg"
           value="">
    <span class="material-input"></span>
</div>

<!--leavingDate-->
<div class="form-group is-empty">
    <label class="control-label">leavingDate	</label>
    <input type="text" name="leavingDate" class="form-control width-lg"
           value="">
    <span class="material-input"></span>
</div>

<!--leavingDateEntFmt-->
<div class="form-group is-empty">
    <label class="control-label">leavingDateEntFmt	</label>
    <input type="text" name="leavingDateEntFmt" class="form-control width-lg"
           value="">
    <span class="material-input"></span>
</div>

<!--molEstId-->
<div class="form-group is-empty">
    <label class="control-label">molEstId	</label>
    <input type="text" name="molEstId" class="form-control width-lg"  value="">
    <span class="material-input"></span>
</div>

<!--molEstOfficeId-->
<div class="form-group is-empty">
    <label class="control-label">molEstOfficeId	</label>
    <input type="text" name="molEstOfficeId" class="form-control width-lg"  value="">
    <span class="material-input"></span>
</div>

<!--registrationNumber-->
<div class="form-group is-empty">
    <label class="control-label">registrationNumber	</label>
    <input type="text" name="registrationNumber" class="form-control width-lg"  value="">
    <span class="material-input"></span>
</div>

<!--wage-->
<div class="form-group is-empty">
    <label class="control-label">wage	</label>
    <input type="text" name="wage" class="form-control width-lg"  value="">
    <span class="material-input"></span>
</div>

<!--wageStatus-->
<div class="form-group is-empty">
    <label class="control-label">wageStatus	</label>
    <input type="text" name="wageStatus" class="form-control width-lg"  value="">
    <span class="material-input"></span>
</div>