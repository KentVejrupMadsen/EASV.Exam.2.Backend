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
    namespace App\Http\Requests\options\find;

    // external libraries
    use OpenApi\Attributes 
    	as OA;

    // internal libraries
    use App\Http\Requests\template\BaseRequest;
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
