<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\formatControllers\json;

    // External libraries
    use Illuminate\Http\Request;

    use Illuminate\Routing\Controller
        as BaseController;

    // Internal library


    /**
     *
     */
    class CSRFResponseJSONFactory
        extends BaseController
    {
        public function __construct( bool $makeSingleton = true )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }


        //
        private static $singleton = null;

        // Acessor
        /**
         * @return CSRFResponseJSONFactory
         */
        public static final function getSingleton(): CSRFResponseJSONFactory
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new CSRFResponseJSONFactory( false )
                );
            }

            return self::$singleton;
        }


        /**
         * @param CSRFResponseJSONFactory $formatter
         * @return void
         */
        protected static final function setSingleton( CSRFResponseJSONFactory $formatter ): void
        {
            self::$singleton = $formatter;
        }
    }
?>