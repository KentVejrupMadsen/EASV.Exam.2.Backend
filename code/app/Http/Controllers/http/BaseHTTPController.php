<?php
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\CrudController;
    use Illuminate\Http\Request;


    /**
     *
     */
    abstract class BaseHTTPController
        extends CrudController
    {
        /**
         *
         */
        public function __construct()
        {
            parent::__construct();

        }
    }
?>