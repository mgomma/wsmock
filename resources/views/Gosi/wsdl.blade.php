<wsdl:definitions name="gosi" targetNamespace="http://tempuri.org/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns:wsx="http://schemas.xmlsoap.org/ws/2004/09/mex" xmlns:wsa10="http://www.w3.org/2005/08/addressing" xmlns:tns="http://tempuri.org/" xmlns:soap12="http://schemas.xmlsoap.org/wsdl/soap12/" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd" xmlns:wsp="http://schemas.xmlsoap.org/ws/2004/09/policy" xmlns:wsap="http://schemas.xmlsoap.org/ws/2004/08/addressing/policy" xmlns:msc="http://schemas.microsoft.com/ws/2005/12/wsdl/contract" xmlns:wsa="http://schemas.xmlsoap.org/ws/2004/08/addressing" xmlns:wsam="http://www.w3.org/2007/05/addressing/metadata" xmlns:wsaw="http://www.w3.org/2006/05/addressing/wsdl" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:i0="http://services.gosi.hrdf.com/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/">
    <wsdl:import namespace="http://services.gosi.hrdf.com/" location="http://webservices.dev/gosi?wsdl"/>
    <wsdl:types/>
    <wsdl:binding name="gosi" type="i0:Igosi">
        <soap:binding transport="http://schemas.xmlsoap.org/soap/http"/>
        <wsdl:operation name="GetEmploymentStatus">
            <soap:operation soapAction="http://webservices.dev/gosi/GetEmploymentStatus" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
        <wsdl:operation name="GetEmploymentStatusMultiple">
            <soap:operation soapAction="http://webservices.dev/gosi/GetEmploymentStatusMultiple" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
        <wsdl:operation name="GetGoSIRecord">
            <soap:operation soapAction="http://webservices.dev/gosi/GetGoSIRecord" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
        <wsdl:operation name="GetContributorSummary">
            <soap:operation soapAction="http://webservices.dev/gosi/1000051700" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
        <wsdl:operation name="isDeserved">
            <soap:operation soapAction="http://webservices.dev/gosi/isDeserved" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
        <wsdl:operation name="validateEstablishmentForHRDF">
            <soap:operation soapAction="http://webservices.dev/gosi/validateEstablishmentForHRDF" style="document"/>
            <wsdl:input>
                <soap:body use="literal"/>
            </wsdl:input>
            <wsdl:output>
                <soap:body use="literal"/>
            </wsdl:output>
        </wsdl:operation>
    </wsdl:binding>
    <wsdl:service name="gosi">
        <wsdl:port name="gosi" binding="tns:gosi">
            <soap:address location="http://webservices.dev/gosi?wsdl"/>
        </wsdl:port>
    </wsdl:service>
</wsdl:definitions>