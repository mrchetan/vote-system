<?php

namespace App\Http\Requests\Voter;

use Illuminate\Foundation\Http\FormRequest;

class PropositionSubmitRequest extends FormRequest
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
            'proposition' => ['exists:propositions,id'],
            'answer' => 'exists:proposition_options,id',
        ];
    }
}
