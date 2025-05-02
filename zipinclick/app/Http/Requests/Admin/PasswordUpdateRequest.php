<?php

namespace App\Http\Requests\Admin;

use App\Services\NotificationService;
use Illuminate\Foundation\Http\FormRequest;

class PasswordUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => ['required','string','current_password'],
            'password' => ['required','string','confirmed','min:8'],
        ];
    }






     //this function is used to configure the validator instance
     public function withValidator($validator)
     {
         if ($validator->fails()) {
             foreach ($validator->errors()->all() as $error) {
                 NotificationService::ERROR($error);
             }
         }

     }


}
