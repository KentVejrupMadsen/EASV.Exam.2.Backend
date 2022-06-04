<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account\entities;

    use App\Http\Requests\template\AccountProtectedRequest;

    use OpenApi\Attributes
        as OA;

    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema()]
    class PersonAddressRequest
        extends AccountProtectedRequest
    {

        /**
         * @return bool
         */
        public final function authorize(): bool
        {
            $retVal = false;

            if( $this->accepts( RequestDefaults::getAllowedFormats() ) )
            {
                $retVal = true;
            }

            return $retVal;
        }


        /**
         * @return array
         */
        public final function rules()
        {
            return
            [
                //
            ];
        }
    }
?>