<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\templates;

	// internal
    use App\Http\Controllers\Controller;
    
    // external
    use Illuminate\Http\Request;


    /**
     *
     */
    abstract class CrudController
        extends Controller
    {
        protected const model_type = 'controller';

        //
        public abstract function read( Request $request );

        //
        public abstract function create( Request $request );

        //
        public abstract function update( Request $request );

        //
        public abstract function delete( Request $request );
    }
?>
