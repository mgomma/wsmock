@extends('template')
<div class="col-md-1"></div>
<div class="col-md-8">
    <h1>Welcome to my bookshop</h1>
    <p><a href="{{ url('/public/gosi/create') }}">Create new</a></p>
    @section('content')
        @if ($gosi->count())
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>NIN</th>
                    <th>contributorFirstName</th>
                    <th>nationalityCode</th>
                    <th>sex</th>
                    <th>socialInsuranceNumber</th>
                    <th>specifiedDate</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php $i=0; ?>
                @foreach ($gosi as $nin)
                    <?php $i++; ?>
                    <tr>
                        <td>{{ $nin->NIN }}</td>
                        <td>{{ $nin->contributorFirstName }}</td>
                        <td>{{ $nin->nationalityCode }}</td>
                        <td>{{ $nin->sex }}</td>
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
            There are no book in the book list
        @endif
</div>
<div class="col-md-2"></div>
@stop