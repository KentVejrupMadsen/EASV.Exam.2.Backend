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
    class PersonNameViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'person_names_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 5,
            minimum: 5,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'account_information_id',
            'person_first_name',
            'person_name_middlename',
            'person_last_name'
        ];

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            'id',
            'account_information_id'
        ];


        protected $casts =
        [
            'id' => 'integer',
            'account_information_id' => 'integer',

            'person_first_name'      => 'string',
            'person_name_middlename' => 'array',
            'person_last_name'       => 'string'
        ];
    }
?>
