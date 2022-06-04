<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account;

    use App\Http\Requests\template\AccountProtectedRequest;

    use App\Http\Requests\template\RequestDefaults;
    
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class AccountPrivateRequest
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
        public final function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>