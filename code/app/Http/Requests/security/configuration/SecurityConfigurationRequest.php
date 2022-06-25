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
    namespace App\Http\Requests\security\configuration;

    // external
    use OpenApi\Attributes 
    	as OA;

    // internal
    use App\Http\Requests\template\AccountProtectedRequest;
    use App\Http\Requests\template\BaseRequest;
    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema( title: 'Security Configuration Request',
                 description: '',
                 type: BaseRequest::model_type,
                 deprecated: false )]
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
        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>
