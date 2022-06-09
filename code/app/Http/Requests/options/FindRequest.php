<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\options;

    // external libraries
    use App\Http\Requests\template\BaseRequest;
    use OpenApi\Attributes
        as OA;

    // internal libraries
    use App\Http\Requests\template\PublicRequest;
    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema( title: 'Find Request',
                 description: '',
                 type: BaseRequest::model_type,
                 deprecated: false )]
    class FindRequest
        extends PublicRequest
    {
        /**
         * @return bool
         */
        public function authorize(): bool
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