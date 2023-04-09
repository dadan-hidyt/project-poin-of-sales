<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KariawanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required|unique:tb_karyawan,nik',
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'avatar' => 'file|mimes:png,jpg,gif'
        ];
    }
    public function attributes()
    {
        return [
            'nik' => 'Nomor Induk Kariawan (NIK)',
            'nama' => 'Nama Karyawan',
            'alamat' => 'Alamat',
            'jk' => 'Jenis Kelamin',
            'no_telp' => 'Nomor Telepon',
            'avatar' => 'Avatar'
        ];
    }
}
