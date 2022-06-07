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
    #[OA\Schema( title: 'Country Model',
                 description: '',
                 type: 'model')]
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'countries';

        // Variable
            // Table
        protected $table = self::table_name;

            // Constant
        #[OA\Property( type: 'string' )]
        public const field_country_name    = 'country_name';

        #[OA\Property( type: 'string' )]
        public const field_country_acronym = 'country_acronym';

        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_country_name,
            self::field_country_acronym
        ];


        protected $casts =
        [
            self::field_country_name    => 'string',
            self::field_country_acronym => 'string'
        ];
    }
?>