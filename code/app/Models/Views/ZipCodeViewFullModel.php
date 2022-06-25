<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\Views;

	// Internal
    use App\Models\Views\templates\ModelView;
    
    
    // External
    use OpenApi\Attributes 
    	as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Zip Code View Full model',
                 description: '',
                 type: ModelView::model_type,
                 readOnly: true,
                 writeOnly: false,
                 deprecated: false )]
    class ZipCodeViewFullModel
        extends ModelView
    {
        #[OA\Property( title: 'view name',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'zip_codes_view_full';
        protected $table = self::table_name;


        #[OA\Property( title: 'identity column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'identity';


        #[OA\Property( title: 'post code area name column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_area_name = 'area_name';

        #[OA\Property( title: 'post code column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_post_code = 'zip_number';


        #[OA\Property( title: 'country name column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_country_name = 'country_name';

        #[OA\Property( title: 'country acronym column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_country_acronym = 'country_acronym';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_area_name,
            self::field_post_code,
            self::field_country_name,
            self::field_country_acronym
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id         => self::typeInteger,

            self::field_area_name  => self::typeString,

            self::field_post_code  => self::typeInteger,

            self::field_country_name      => self::typeString,
            self::field_country_acronym   => self::typeString
        ];
    }
?>
