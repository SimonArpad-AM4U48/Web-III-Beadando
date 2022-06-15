<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TorrentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
