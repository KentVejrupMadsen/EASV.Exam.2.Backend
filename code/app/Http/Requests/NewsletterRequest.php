<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class NewsletterRequest
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