<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class AddressModel
        extends Model
    {
        use HasFactory;

        protected $table = 'addresses';


        protected $fillable =
        [
            'account_information_id',
            'road_name_id',
            'road_number',
            'levels',
            'country_id',
            'zip_code_id'
        ];


        protected $hidden =
        [
            'country_id',
            'zip_code_id',
            'road_name_id',
            'account_information_id',
        ];


        protected $casts =
        [
            'account_information_id' => 'integer',
            'road_name_id'           => 'integer',
            'road_number'            => 'integer',
            'levels'                 => 'string',
            'country_id'             => 'integer',
            'zip_code_id'            => 'integer'
        ];

    }
?>