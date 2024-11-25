<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:128'],
            'content' => ['required', 'max:1028'],
            'author' => ['required', 'max:128'],
            'published_at' => ['nullable', 'date'],
            'category' => ['required', 'max:64'],
            'cover_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
