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


        #[OA\Property( )]
        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_acronym'
        ];


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