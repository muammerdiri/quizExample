<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:250|min:5',
            'finished_at'=>'nullable|after:'.now()

        ];
    }
    public function attributes(){
     
        return[
            'title'=>'Quiz Başlık',
            'description'=>'Açıklama',
            'finished_at'=>'Bitiş Tarihi'
        ];
    }
}
