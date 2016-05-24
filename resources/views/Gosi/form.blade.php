<div class="container">
<div class="row col-sm-6">
    <h1>Create GOSI</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
    <!--NIN-->
    <div class="form-group is-empty">
        <label class="control-label">NIN</label>
        <input type="text" name="NIN" class="form-control width-lg"  value="">
        <span class="material-input"></span>
    </div>

    <!--contributorFirstName-->
    <div class="form-group is-empty">
        <label class="control-label">contributorFirstName	</label>
        <input type="text" name="contributorFirstName" class="form-control width-lg" value="">
        <span class="material-input"></span>
    </div>

    <!--contributorThirdName-->
    <div class="form-group is-empty">
        <label class="control-label">contributorThirdName	</label>
        <input type="text" name="contributorThirdName" class="form-control width-lg"
               value="">
        <span class="material-input"></span>
    </div>

    <!--contributorLastName-->
    <div class="form-group is-empty">
        <label class="control-label">contributorLastName	</label>
        <input type="text" name="contributorLastName" class="form-control width-lg"
               value="">
        <span class="material-input"></span>
    </div>

    <!--contributorSecondName-->
    <div class="form-group is-empty">
        <label class="control-label">contributorSecondName	</label>
        <input type="text" name="contributorSecondName" class="form-control width-lg"
               value="">
        <span class="material-input"></span>
    </div>

    <!--nationalityCode-->
    <div class="form-group is-empty">
        <label class="control-label">nationalityCode	</label>
        <input type="text" name="nationalityCode" class="form-control width-lg"
               value="">
        <span class="material-input"></span>
    </div>

    <!--newNINumber-->
    <div class="form-group is-empty">
        <label class="control-label">newNINumber	</label>
        <input type="text" name="newNINumber" class="form-control width-lg"
               value="">
        <span class="material-input"></span>
    </div>

    <!--sex-->
    <div class="form-group is-empty">
        <label class="control-label">sex	</label>
        <select name="sex">
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>
        <span class="material-input"></span>
    </div>

    <!--socialInsuranceNumber-->
    <div class="form-group is-empty">
        <label class="control-label">socialInsuranceNumber	</label>
        <input type="text" name="socialInsuranceNumber" class="form-control width-lg"  value="">
        <span class="material-input"></span>
    </div>

    <!--specifiedDate-->
    <div class="form-group is-empty">
        <label class="control-label">specifiedDate	</label>
        <input type="text" name="specifiedDate" class="form-control width-lg"  value="">
        <span class="material-input"></span>
    </div>

</div>
</div>