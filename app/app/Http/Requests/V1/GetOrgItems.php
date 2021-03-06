<?php

namespace App\Http\Requests\V1;

use App\Traits\UserRequest;
use Illuminate\Foundation\Http\FormRequest;

class GetOrgItems extends FormRequest
{
    use UserRequest;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $hasRole =  $this->userHasRole('org_admin') || $this->userHasRole('org_member') || $this->userHasRole('admin');
        $isOrgMember = $this->belongsToOrg($this->route('id'));

        return $hasRole && $isOrgMember;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
