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


    /**
     *
     */
    #[OA\Schema( title: 'Zip Code View short model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class ZipCodeViewShortModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'zip_codes_view_short';
        protected $table = self::table_name;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_acronym'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id' => self::typeInteger,

            'area_name'     => self::typeString,
            'zip_number'    => self::typeInteger,

            'country_acronym' => self::typeString
        ];
    }
?>