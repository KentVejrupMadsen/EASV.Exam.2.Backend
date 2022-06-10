<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\security\recaptcha;

    use App\Http\Requests\template\BaseRequest;
    use App\Http\Requests\template\RequestDefaults;
    use Illuminate\Foundation\Http\FormRequest;
    use OpenApi\Attributes as OA;

    // internal libraries


    /**
     *
     */
    #[OA\Schema( title: 'Security Recaptcha Request',
                 description: '',
                 type: BaseRequest::model_type,
                 deprecated: false )]
    class SecurityRecaptchaRequest
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