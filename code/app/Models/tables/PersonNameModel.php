<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\BaseModel;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class PersonNameModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'person_name';

        // Variables
            // Table
        protected $table = self::table_name;
        #[OA\Property( type: 'boolean' )]
        public $timestamps = false;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_account_information_id  = 'account_information_id';

        #[OA\Property( type: 'string' )]
        public const field_person_name_first_id    = 'person_name_first_id';

        #[OA\Property( type: 'string' )]
        public const field_person_name_lastname_id = 'person_name_lastname_id';

        #[OA\Property( type: 'string' )]
        public const field_person_name_middlename  = 'person_name_middlename';


        //
        #[OA\Property(
            property: 'fillable',
            schema: AccountInformationModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_account_information_id,
            self::field_person_name_first_id,
            self::field_person_name_lastname_id,
            self::field_person_name_middlename
        ];


        protected $hidden =
        [
            self::field_account_information_id,
            self::field_person_name_first_id,
            self::field_person_name_lastname_id,
        ];


        protected $casts =
        [
            self::field_account_information_id  => 'integer',
            self::field_person_name_first_id    => 'integer',
            self::field_person_name_lastname_id => 'integer',
            self::field_person_name_middlename  => 'array',
        ];
    }
?>
