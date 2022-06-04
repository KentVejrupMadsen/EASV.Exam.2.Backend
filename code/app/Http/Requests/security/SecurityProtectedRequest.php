<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\security;

    use App\Http\Requests\template\AccountProtectedRequest;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class SecurityProtectedRequest
        extends AccountProtectedRequest
    {
        /**
         * @return void
         */
        protected final function denyAccess(): void
        {
            if( $this->requireLoginGuard() )
            {
                abort( 403 );
            }
        }


        /**
         * @return bool
         */
        public function authorize(): bool
        {
            $this->denyAccess();
            return true;
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