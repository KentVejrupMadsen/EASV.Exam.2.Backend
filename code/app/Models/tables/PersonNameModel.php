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
        // Variables
            // Table
        protected $table = 'person_name';
        public $timestamps = false;

            // Constants
        protected const field_account_information_id  = 'account_information_id';
        protected const field_person_name_first_id    = 'person_name_first_id';
        protected const field_person_name_lastname_id = 'person_name_lastname_id';
        protected const field_person_name_middlename  = 'person_name_middlename';


        //
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
