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
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        // Variable
            // Table
        protected $table = 'countries';

            // Constant
        #[OA\Property( )]
        protected const field_country_name    = 'country_name';

        #[OA\Property(  )]
        protected const field_country_acronym = 'country_acronym';

        //
        protected $fillable =
        [
            self::field_country_name,
            self::field_country_acronym
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            self::field_country_name    => 'string',
            self::field_country_acronym => 'string'
        ];
    }
?>