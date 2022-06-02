<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\options;

    use App\Http\Requests\template\PublicRequest;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class StateRequest
        extends PublicRequest
    {
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
        public final function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>