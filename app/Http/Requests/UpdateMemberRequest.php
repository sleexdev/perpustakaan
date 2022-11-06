<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'kode_member' => 'required|unique:members,kode_member,'. $this->member->kode_member .',kode_member',
            'nama' => 'required',
            'ribath' => '',
            'kamar' => '',
            'sekolah' => '',
            'kelas' => '',
            'kelas_MHM' => '',
        ];
    }
}
