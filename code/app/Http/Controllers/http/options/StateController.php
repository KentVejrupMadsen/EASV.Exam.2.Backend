<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\options;

    // External libraries
    use Carbon\Carbon;

    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerOption;

    use App\Models\tables\AccountEmailModel;
    use App\Http\Requests\options\StateRequest;


    /**
     * 
     */
    final class StateController
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


        public final function publicState( StateRequest $request )
        {

        }

    }

?>