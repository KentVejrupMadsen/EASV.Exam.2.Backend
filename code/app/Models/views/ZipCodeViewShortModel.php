<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema()]
    class ZipCodeViewShortModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'zip_codes_view_short';
        protected $table = self::table_name;


        #[OA\Property(
            property: 'fillable',
            schema: ZipCodeViewShortModel::class,
            type: 'array',
            maximum: 4,
            minimum: 4,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_acronym'
        ];

        #[OA\Property(
            property: 'hidden',
            schema: ZipCodeViewShortModel::class,
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            'id',
        ];


        protected $casts =
        [
            'id' => 'integer',

            'area_name'     => 'string',
            'zip_number'    => 'integer',

            'country_acronym' => 'string'
        ];
    }
?>