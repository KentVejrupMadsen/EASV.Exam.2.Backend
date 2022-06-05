<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account;

    // External
    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Http\Requests\template\PublicRequest;
    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema()]
    class AccountRequest
        extends PublicRequest
    {
        private function allowedMethods()
        {
            return $this->isMethod( 'DELETE' ) |
                   $this->isMethod( 'GET' )    |
                   $this->isMethod( 'PATCH' )  |
                   $this->isMethod( 'POST' );
        }

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

            if( !$this->allowedMethods() )
            {
                abort( 405, 'is not a valid http method' );
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