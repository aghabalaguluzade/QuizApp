<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'finished_at' => ['nullable', 'after:'.now()]
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Quiz Başlığı',
            'description' => 'Quiz Açıqlaması',
            'finished_at' => 'Quiz Bitiş Tarixi'
        ];
    }
}
