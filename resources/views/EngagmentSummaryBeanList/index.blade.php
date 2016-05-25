@include('layout')
<a href="/gosi" target="_blank" class="btn btn-block">GOSI List</a>
<a href="/engagmentSummaryBeanList/create" target="_blank" class="btn btn-block">Add Engagment Summary Bean List</a>
<table class="table table-striped">
    <caption>Engagment Summary Bean List</caption>
    <thead>
        <th>NIN</th>
        <th>engagementStatus</th>
        <th>establishmentNameArb</th>
        <th>joiningDate</th>
        <th>joiningDateEntFmt</th>
        <th>leavingDate</th>
        <th>leavingDateEntFmt</th>
        <th>molEstId</th>
        <th>molEstOfficeId</th>
        <th>registrationNumber</th>
        <th>wage</th>
        <th>wageStatus</th>
    </thead>
    <tbody>
        @foreach($engagmentSummaryBeanList as $engagmentSummaryBean)
        <tr>
            <td>{{ $engagmentSummaryBean->gosi_id }}</td>
            <td>{{ $engagmentSummaryBean->engagementStatus }}</td>
            <td>{{ $engagmentSummaryBean->establishmentNameArb }}</td>
            <td>{{ $engagmentSummaryBean->joiningDate }}</td>
            <td>{{ $engagmentSummaryBean->joiningDateEntFmt }}</td>
            <td>{{ $engagmentSummaryBean->molEstId }}</td>
            <td>{{ $engagmentSummaryBean->molEstOfficeId }}</td>
            <td>{{ $engagmentSummaryBean->registrationNumber }}</td>
            <td>{{ $engagmentSummaryBean->wage }}</td>
            <td>{{ $engagmentSummaryBean->wageStatus }}</td>
        </tr>
        @endforeach
    </tbody>
</table>