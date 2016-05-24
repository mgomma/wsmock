<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EngagmentSummaryBeanListRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gosi_id' => 'required|integer',
            'engagementStatus' => 'required|integer',
            'establishmentNameArb' => 'required',
            'joiningDate' => 'required|date',
            'joiningDateEntFmt' => 'required|date',
            'leavingDate' => 'required|date',
            'leavingDateEntFmt' => 'required|date',
            'molEstId' => 'required|integer',
            'molEstOfficeId' => 'required|integer',
            'registrationNumber' => 'required|integer',
            'wage' => 'required|integer',
            'wageStatus' => 'required|integer',
        ];
    }
}
