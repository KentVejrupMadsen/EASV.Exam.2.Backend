<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\options;

    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    class FindRequest
        extends FormRequest
    {
        /**
         * @return bool
         */
        public function authorize(): bool
        {
            return false;
        }

        /**
         * @return array
         */
        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>