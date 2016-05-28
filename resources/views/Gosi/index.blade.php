@extends('template')
<div class="col-md-1"></div>
<div class="col-md-8">
    <h1>Welcome to API GOSI Simulator</h1>
    <p><a class="btn btn-primary" href="{{ url('/gosi/create') }}">Create new</a></p>
    @section('content')
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
@stop