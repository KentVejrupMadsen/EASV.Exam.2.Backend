<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class ZipCodeModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Tables
        protected $table = self::table_name;

        #[OA\Property( type: 'string' )]
        public const table_name = 'zip_codes';

            // Constants
        #[OA\Property( type: 'string' )]
        protected const area_name = 'area_name';

        #[OA\Property( type: 'string' )]
        protected const zip_number = 'zip_number';

        #[OA\Property( type: 'string' )]
        protected const country_id = 'country_id';


        //
        protected $fillable =
        [
            self::area_name,
            self::zip_number,
            self::country_id
        ];


        protected $hidden =
        [
            self::country_id
        ];


        protected $casts =
        [
            self::area_name  => 'string',
            self::zip_number => 'string',
            self::country_id => 'integer'
        ];
    }
?>