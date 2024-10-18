<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubscriptionRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'plan_id' => 'required|exists:plans,id',
            'status' => 'required|string',
            'order_date' => 'required|date_format:Y-m-d', // Ensure order_date is in YYYY-MM-DD format
            'start_date' => 'required|date_format:Y-m-d', // Ensure start_date is in YYYY-MM-DD format
            'end_date' => 'required|date_format:Y-m-d|after_or_equal:start_date', // Ensure end_date is in YYYY-MM-DD format and after or equal to start_date
        ];
    }
}
