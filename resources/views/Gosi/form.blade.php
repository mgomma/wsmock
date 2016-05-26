<div class="container">
<div class="row col-sm-12">
    <h1>Create GOSI NIN with details</h1>

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
    <div class="form-group col-md-4">
        {!! Form::label('NIN', 'NIN:') !!}
        <input type="text" name="NIN" class="form-control width-lg" 
               value="@if(isset($item->NIN)) {{$item->NIN}} @endif">
        <span class="material-input"></span>
    </div>

    <!--contributorFirstName-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('contributorFirstName', 'contributorFirstName:') !!}
        <input type="text" name="contributorFirstName" class="form-control width-lg" 
               value="@if(isset($item->NIN)) {{$item->contributorFirstName}} @endif">
        <span class="material-input"></span>
    </div>

    <!--contributorThirdName-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('contributorThirdName', 'contributorThirdName:') !!}
        <input type="text" name="contributorThirdName" class="form-control width-lg"
               value="@if(isset($item->NIN)) {{$item->contributorThirdName}} @endif">
        <span class="material-input"></span>
    </div>

    <!--contributorLastName-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('contributorLastName', 'contributorLastName:') !!}
        <input type="text" name="contributorLastName" class="form-control width-lg"
               value="@if(isset($item->NIN)) {{$item->contributorLastName}} @endif">
        <span class="material-input"></span>
    </div>

    <!--contributorSecondName-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('contributorSecondName', 'contributorSecondName:') !!}
        <input type="text" name="contributorSecondName" class="form-control width-lg"
               value="@if(isset($item->NIN)) {{$item->contributorSecondName}} @endif">
        <span class="material-input"></span>
    </div>

    <!--nationalityCode-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('nationalityCode', 'nationalityCode:') !!}
        <input type="text" name="nationalityCode" class="form-control width-lg"
               value="@if(isset($item->NIN)) {{$item->nationalityCode}} @endif">
        <span class="material-input"></span>
    </div>

    <!--newNINumber-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('newNINumber', 'newNINumber:') !!}
        <input type="text" name="newNINumber" class="form-control width-lg"
               value="@if(isset($item->NIN)) {{$item->newNINumber}} @endif">
        <span class="material-input"></span>
    </div>

    <!--sex-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('sex', 'sex:') !!}
        {!! Form::select('sex', array('0' => 'Male', '1' => 'Female'),old('sex'), array('class' => 'form-control')) !!}
        <span class="material-input"></span>
    </div>

    <!--socialInsuranceNumber-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('socialInsuranceNumber', 'socialInsuranceNumber:') !!}
        <input type="text" name="socialInsuranceNumber" class="form-control width-lg"  
               value="@if(isset($item->NIN)) {{$item->socialInsuranceNumber}} @endif">
        <span class="material-input"></span>
    </div>

    <!--specifiedDate-->
    <div class="form-group is-empty col-md-4">
        {!! Form::label('specifiedDate', 'specifiedDate:') !!}
        <input type="text" name="specifiedDate" class="form-control width-lg" placeholder="2010-01-01" 
               value="@if(isset($item->NIN)) {{$item->specifiedDate}} @endif">
        <span class="material-input"></span>
    </div>
    
</div>
</div>

<div class="form-group">
    {!! Form::submit('حفظ', array('class' => 'btn btn-primary')) !!}
</div>
