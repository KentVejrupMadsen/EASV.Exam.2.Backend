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

        protected $table = 'boards';

        protected $fillable =
        [
            'account_information_id',
            'road_name_id',
            'road_number',
            'levels',
            'country_id',
            'zip_code_id',
            'created_at',
            'updated_at'
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
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];

    }
?>