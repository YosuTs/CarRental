<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListAvailableCategoriesRequest extends FormRequest
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
          'pick_up_location_id' => 'required',
          'pick_up_date' => 'required|date',
          'drop_off_location_id' => 'required',
          'drop_off_date' => 'required|date'
        ];
    }
}
