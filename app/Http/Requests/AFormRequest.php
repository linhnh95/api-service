<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:05 PM
 */

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Exceptions\ValidationException;

abstract class AFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize();

    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException("Field is invalid", $validator->errors());
    }
}
