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
    namespace App\Http\Controllers;

	// External
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Foundation\Bus\DispatchesJobs;

    use Illuminate\Routing\Controller
        as BaseController;


    /**
     * 
     */
    abstract class Controller
        extends BaseController
    {
        use AuthorizesRequests, 
            DispatchesJobs, 
            ValidatesRequests;
    }
?>
