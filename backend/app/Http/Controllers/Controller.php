<?php

    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Routing\Controller as BaseController;

<<<<<<< HEAD
    class Controller 
        extends BaseController
    {
        use AuthorizesRequests, 
            DispatchesJobs, 
            ValidatesRequests;

            
=======
    class Controller extends BaseController
    {
        use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
    }
?>