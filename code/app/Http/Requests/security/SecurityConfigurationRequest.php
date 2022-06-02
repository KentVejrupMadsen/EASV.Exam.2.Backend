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
    class SecurityConfigurationRequest
        extends AccountProtectedRequest
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