<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'category' => ['required', 'in:general,pricing,consultation,other'],
            'message' => ['required', 'max:5000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'category' => 'お問い合わせ種別',
            'message' => 'お問い合わせ内容',
        ];
    }
}
