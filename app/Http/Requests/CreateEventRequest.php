<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'language' => 'required|string',
            'country' => 'required|string',
            'countdown' => 'required|date',
            'beep_sounds' => 'required|string',
            'face_props' => 'required|string',
            'gallery_name' => 'required|string',
            'attract_screen' => 'required|string',
            'app_logo' => 'required|string',
            'app_background' => 'required|string',
            'webgallery_background' => 'required|string',
        ];
    }
}
