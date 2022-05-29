<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class FindRequest
        extends FormRequest
    {
        /**
         * @return false
         */
        public function authorize()
        {
            return false;
        }

        /**
         * @return array
         */
        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>