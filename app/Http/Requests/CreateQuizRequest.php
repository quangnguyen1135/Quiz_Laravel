<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:4',
            'category' => 'required',
            'grade' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tên là bắt buộc.',
            'title.min' => 'Tên phải dài ít nhất 4 ký tự.',
            'category.required' => 'Chủ thể là bắt buộc.',
            'grade.required' => 'Lớp là bắt buộc.',
        ];
    }
}
