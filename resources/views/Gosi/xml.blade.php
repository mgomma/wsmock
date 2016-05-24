<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
   <s:Header>
      <ActivityId CorrelationId="823682cb-efd5-416d-9089-58500a28da01" xmlns="http://schemas.microsoft.com/2004/09/ServiceModel/Diagnostics">9ce4506f-52fa-4591-b7ed-a8d625c6742d</ActivityId>
   </s:Header>
   <s:Body>
      <GetContributorSummaryResponse xmlns="http://services.gosi.hrdf.com/">
         <GetContributorSummaryResult xmlns:a="http://schemas.datacontract.org/2004/07/MOCSLiteWCFService" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
            <a:contributorFirstName>{{$contributorFirstName}}</a:contributorFirstName>
            <a:contributorLastName>{{$contributorLastName}}</a:contributorLastName>
            <a:contributorSecondName>{{$contributorSecondName}}</a:contributorSecondName>
            <a:contributorThirdName>{{$contributorThirdName}}</a:contributorThirdName>
            <a:engagmentSummaryBeanList>
                
               <a:SimplifiedEngagmentSummaryBeanList>
                  <a:engagementStatus>6</a:engagementStatus>
                  <a:establishmentNameArb>2YHYsdi5INi02LHZg9ipINin2YTZhdi02LHZiNi52KfYqiDYp9mE2KjYqtix2YjZhNmK2Kkg2KfZhNmF2LXYsdmK2Kk=</a:establishmentNameArb>
                  <a:joiningDate>2013-09-01T00:00:00</a:joiningDate>
                  <a:joiningDateEntFmt/>
                  <a:leavingDate>2014-03-01T00:00:00</a:leavingDate>
                  <a:leavingDateEntFmt/>
                  <a:molEstId>168821</a:molEstId>
                  <a:molEstOfficeId>1</a:molEstOfficeId>
                  <a:registrationNumber>503688476</a:registrationNumber>
                  <a:wage>3000</a:wage>
                  <a:wageStatus>1001</a:wageStatus>
               </a:SimplifiedEngagmentSummaryBeanList>
               
            </a:engagmentSummaryBeanList>
            <a:nationalityCode>{{$nationalityCode}}</a:nationalityCode>
            <a:newNINumber>{{$newNINumber}}</a:newNINumber>
            <a:sex>{{$sex}}</a:sex>
            <a:socialInsuranceNumber>{{$socialInsuranceNumber}}</a:socialInsuranceNumber>
            <a:specifiedDate>{{$specifiedDate}}</a:specifiedDate>
         </GetContributorSummaryResult>
      </GetContributorSummaryResponse>
   </s:Body>
</s:Envelope>
