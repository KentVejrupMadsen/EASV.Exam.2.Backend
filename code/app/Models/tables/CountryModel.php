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
    use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
    use phpDocumentor\Reflection\Type;

    /**
     *
     */
    #[OA\Schema()]
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'countries';

        // Variable
            // Table
        protected $table = self::table_name;

            // Constant
        #[OA\Property(type: 'string' )]
        public const field_country_name    = 'country_name';

        #[OA\Property( type: 'string' )]
        public const field_country_acronym = 'country_acronym';

        //
        #[OA\Property(
            property: 'fillable',
            schema: CountryModel::class,
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