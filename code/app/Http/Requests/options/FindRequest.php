<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\options;

    // external libraries
    use OpenApi\Attributes
        as OA;

    // internal libraries
    use App\Http\Requests\template\PublicRequest;
    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema()]
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