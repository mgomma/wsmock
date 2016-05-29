@extends('template')
<div class="col-md-1"></div>
<div class="col-md-8">
    <h1>Welcome to API GOSI Simulator</h1>
    <p><a class="btn btn-primary" href="{{ url('/gosi/create') }}">Create new</a></p>
    @section('content')

         <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    {!! Form::model('',['method'=>'get','action'=>'GosiController@index', 'id' => 'gosi', 'class' => '']) !!}
                        <th><input type="text" name="NIN" class="form-control width-lg" placeholder='National ID' value="<?php echo isset($_GET['NIN'])? $_GET['NIN']: '' ?>" > </th>
                        <th><input type="text" name="Name" class="form-control width-lg" placeholder='Name' value="<?php echo isset($_GET['Name'])? $_GET['Name']: '' ?>" > </th>
                        <th><input type="text" name="Nationality" class="form-control width-lg" placeholder='Nationality' value="<?php echo isset($_GET['Nationality'])? $_GET['Nationality']: '' ?>" > </th>
                        <th><input type="text" name="Gender" class="form-control width-lg" placeholder='Gender' value="<?php echo isset($_GET['Gender'])? $_GET['Gender']: '' ?>" > </th>
                        <th><input type="text" name="socialInsuranceNumber" class="form-control width-lg" placeholder='Social Insurance No' value="<?php echo isset($_GET['socialInsuranceNumber'])? $_GET['socialInsuranceNumber']: '' ?>" > </th>
                        <th> <button type="submit" id="submit" value="submit"> submit </button> </th>
                    {!! Form::close() !!}

                </tr>
            </thead>
         </table>
         
        @if ($gosi->count())


            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>National ID</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Gender</th>
                    <th>Social Insurance No</th>
                    <th>Specified Date</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php $i=0; ?>
                @foreach ($gosi as $nin)
                    <?php $i++; ?>
                    <tr>
                        <td>{{ $nin->NIN }}</td>
                        <td>{{ $nin->contributorFirstName }} {{ $nin->contributorSecondName }} {{ $nin->contributorThirdName }} {{ $nin->contributorLastName }}</td>
                        <td>{{ $nin->nationalityCode }}</td>
                        <td>@if ($nin->sex == 1)
                                Female
                            @else
                                Male
                            @endif                          
                        </td>
                        <td>{{ $nin->socialInsuranceNumber }}</td>
                        <td>{{ $nin->specifiedDate }}</td>


                        <td><a class="btn btn-primary" href="{{ url('gosi/'.$nin->NIN) }}">Read</a></td>
                        <td><a class="btn btn-warning" href="{{ url('gosi/edit/'.$nin->NIN) }}">Update</a></td>
                        <td><a class="btn btn-danger" href="">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <center>
                {!!$gosi->render()!!}
            </center>
        @else
            There are no results.
        @endif
</div>
<div class="col-md-2"></div>
<script type="text/javascript">
$(document).ready(function() { 

      $('#gosi input').keyup(function(e) {
        if (e.keyCode == 13) {
            $('#gosi').submit();
        }
    });
 });
</script>

@stop

