<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\security;

    // external libraries
    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Requests\template\RequestDefaults;
    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    #[OA\Schema()]
    class SecurityCSRFRequest
        extends FormRequest
    {
        /**
         * @return bool
         */
        protected final function denyAccess(): bool
        {
            $ret = false;

            return $ret;
        }

        /**
         * @return bool
         */
        public final function authorize(): bool
        {
            $retVal = false;

            if( $this->denyAccess() )
            {
                return $retVal;
            }

            if( $this->accepts( RequestDefaults::getAllowedFormats() ) )
            {
                $retVal = true;
            }

            //
            return $retVal;
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