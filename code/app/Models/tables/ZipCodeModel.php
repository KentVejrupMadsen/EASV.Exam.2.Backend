<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\templates\ExtensionNoTimestampModel;

    // External libraries
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
        protected $table = self::field_table_name;

        #[OA\Property( type: 'string' )]
        public const field_table_name = 'zip_codes';

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_area_name = 'area_name';

        #[OA\Property( type: 'string' )]
        public const field_zip_number = 'zip_number';

        #[OA\Property( type: 'string' )]
        public const field_country_id = 'country_id';


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_area_name,
            self::field_zip_number,
            self::field_country_id
        ];


        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            self::field_country_id
        ];


        protected $casts =
        [
            self::field_area_name  => 'string',
            self::field_zip_number => 'string',
            self::field_country_id => 'integer'
        ];
    }
?>