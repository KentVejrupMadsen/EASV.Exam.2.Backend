<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Requests\template;

    //
    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    abstract class PublicRequest
        extends FormRequest
    {
        public const model_type = 'request';

        /**
         * @return bool
         */
        protected final function isDebugging(): bool
        {
            $var = env( 'APP_DEBUG' );

            if( isset( $var ) )
            {
                $debug_variable = $var;
            }

            if( is_null( $var ) )
            {
                $debug_variable = false;
            }

            return $debug_variable;
        }


        /**
         * @return bool
         */
        protected final function RequireSecureConnection(): bool
        {
            $retVal = false;

            // if behind a proxy -> returns true if it is https
            if( $this->isSecure() )
            {
                $retVal = true;
                return $retVal;
            }

            if( isset( $_SERVER[ 'HTTPS' ] ) && ( $_SERVER[ 'HTTPS' ] == 'on' || $_SERVER[ 'HTTPS' ] == 1 ) )
            {
                $retVal = true;
            }

            return $retVal;
        }

        /**
         * @return bool
         */
        protected final function CRUDRoutes(): bool
        {
            return $this->isMethod( RequestDefaults::getMethodDelete() ) |
                   $this->isMethod( RequestDefaults::getMethodGet() )    |
                   $this->isMethod( RequestDefaults::getMethodPatch() )  |
                   $this->isMethod( RequestDefaults::getMethodPost() );
        }

    }
?>
