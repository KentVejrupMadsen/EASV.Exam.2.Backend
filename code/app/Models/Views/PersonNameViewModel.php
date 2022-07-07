<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
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
    #[OA\Schema( title: 'Person Name View Model',
                 description: '',
                 type: ModelView::model_type,
                 readOnly: true,
                 writeOnly: false,
                 deprecated: false )]
    class PersonNameViewModel
        extends ModelView
    {
        #[OA\Property( title: 'view name',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'person_names_view';
        protected $table = self::table_name;


        #[OA\Property( title: 'identity column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'identity';

        #[OA\Property( title: 'account information column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_account_information_id = 'account_information_id';


        #[OA\Property( title: 'person first name column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_person_first_name = 'person_first_name';

        #[OA\Property( title: 'person middle names column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_person_name_middlename = 'person_name_middlename';

        #[OA\Property( title: 'person last name column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_person_last_name = 'person_last_name';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_account_information_id,
            self::field_person_first_name,
            self::field_person_name_middlename,
            self::field_person_last_name
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_account_information_id,
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id                     => self::typeInteger,
            self::field_account_information_id => self::typeInteger,

            self::field_person_first_name      => self::typeString,
            self::field_person_name_middlename => self::typeArray,
            self::field_person_last_name       => self::typeString
        ];
    }
?>
