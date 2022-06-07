<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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