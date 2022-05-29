<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account\entities;

    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    class PersonEmailRequest
        extends FormRequest
    {
        /**
         * @return bool
         */
        public final function authorize(): bool
        {
            return false;
        }

        /**
         * @return array
         */
        public final function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>