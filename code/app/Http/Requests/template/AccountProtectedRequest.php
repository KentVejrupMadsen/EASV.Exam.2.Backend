<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Requests\template;

    //
    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    abstract class AccountProtectedRequest
        extends FormRequest
    {

        public const model_type = 'request';

        /**
         * @return bool
         */
        protected final function requireLoginGuard(): bool
        {
            if( is_null( $this->bearerToken() ) )
            {
                return false;
            }

            return true;
        }


        /**
         * @return bool
         */
        protected final function requireVerifiedAccount(): bool
        {
            if( is_null( $this->user()->email_verfied_at ) )
            {
                return false;
            }

            return true;
        }



    }
?>
