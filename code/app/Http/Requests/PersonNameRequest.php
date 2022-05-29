<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class PersonNameRequest
        extends FormRequest
    {
        public function authorize()
        {
            return false;
        }


        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>