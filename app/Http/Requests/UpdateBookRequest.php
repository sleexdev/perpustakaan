<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
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
            'kode' => 'required|unique:books,kode,'. $this->book->kode .',kode',
            'nama' => 'required',
            'penulis' => '',
            'penerbit' => '',
            'tahun' => 'numeric',
            'tebal' => 'numeric',
        ];
    }
}
