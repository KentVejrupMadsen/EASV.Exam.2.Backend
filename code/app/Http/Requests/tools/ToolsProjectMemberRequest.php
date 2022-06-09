<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\tools;

    // internal libraries
    use App\Http\Requests\template\AccountProtectedRequest;
    use App\Http\Requests\template\BaseRequest;
    use App\Http\Requests\template\RequestDefaults;

    // external libraries
    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Tools Project Member Request',
                 description: '',
                 type: BaseRequest::model_type,
                 deprecated: false  )]
    class ToolsProjectMemberRequest
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
        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>