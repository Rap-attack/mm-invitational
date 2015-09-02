<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OsaRequest extends Request
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
        $rules = [];

        foreach($this->request->get('attendees') as $key => $val)
        {
            $rules['attendees.'.$key.'.name'] = 'required';
            $rules['attendees.'.$key.'.competing'] = 'required|boolean';
        }

      return $rules;
    }
}
