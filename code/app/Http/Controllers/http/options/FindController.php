<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\options;

    // External
    use Carbon\Carbon;

    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Models\tables\AccountEmailModel;
    use App\Http\Requests\options\FindRequest;
    use App\Http\Controllers\templates\ControllerOption;


    /**
     * 
     */
    final class FindController
        extends ControllerOption
    {
        /**
         *
         */
        public final function __construct()
        {
            parent::__construct();
        }


        // Variables
        private const conflict = 409;

        public function publicFind( FindRequest $request )
        {

        }
    }

?>