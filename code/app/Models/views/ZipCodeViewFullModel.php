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
    class ZipCodeViewFullModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'zip_codes_view_full';
        protected $table = self::table_name;

        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_name',
            'country_acronym'
        ];

        protected $hidden =
        [
            'id',
        ];


        protected $casts =
        [
            'id' => 'integer',

            'area_name'  => 'string',

            'zip_number' => 'integer',

            'country_name'      => 'string',
            'country_acronym'   => 'string'
        ];
    }
?>