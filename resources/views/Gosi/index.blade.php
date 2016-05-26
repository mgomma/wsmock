@include('layout')
<a href="/public/gosi/create" target="_blank" class="btn btn-block">Add GOSI</a>
<a href="/public/engagmentSummaryBeanList/create" target="_blank" class="btn btn-block">Add Engagment Summary Bean List</a>
<table class="table table-striped" style="font-size: 13px !important;">
    <caption>GOSI</caption>
    <thead>
        <th>NIN</th>
        <th>contributorFirstName</th>
<!--        <th>contributorLastName</th>
        <th>contributorSecondName</th>
        <th>contributorThirdName</th>-->
        <th>nationalityCode</th>
        <!--<th>newNINumber</th>-->
        <th>sex</th>
        <th>socialInsuranceNumber</th>
        <th>specifiedDate</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($gosi as $nin)
        <tr>
            <td>{{ $nin->NIN }}</td>
            <td>{{ $nin->contributorFirstName }}</td>
<!--            <td>{{ $nin->contributorLastName }}</td>
            <td>{{ $nin->contributorSecondName }}</td>
            <td>{{ $nin->contributorThirdName }}</td>-->
            <td>{{ $nin->nationalityCode }}</td>
            <!--<td>{{ $nin->newNINumber }}</td>-->
            <td>{{ $nin->sex }}</td>
            <td>{{ $nin->socialInsuranceNumber }}</td>
            <td>{{ $nin->specifiedDate }}</td>
            <td>
                <a href="{{ url('gosi/'.$nin->NIN) }}" target="_blank">Show</a>
                <a href="{{ url('gosi/edit/'.$nin->NIN) }}" target="_blank">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>