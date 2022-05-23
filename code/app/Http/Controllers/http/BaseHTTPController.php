<?php
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\CrudController;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    abstract class BaseHTTPController
        extends CrudController
    {
        public function __construct()
        {
            parent::__construct();

        }

        
    }
?>