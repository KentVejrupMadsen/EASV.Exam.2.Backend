<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class PersonNameModel
        extends Model
    {
        use HasFactory;

        protected $table = 'person_name';


        protected $fillable =
        [
            'account_information_id',
            'person_name_first_id',
            'person_name_lastname_id',
            'person_name_middlename'
        ];


        protected $hidden =
        [
            'account_information_id',
            'person_name_first_id',
            'person_name_lastname_id'
        ];


        protected $casts =
        [
            'account_information_id'    => 'integer',
            'person_name_first_id'      => 'integer',
            'person_name_lastname_id'   => 'integer',
            'person_name_middlename'    => 'string'
        ];
    }
?>
