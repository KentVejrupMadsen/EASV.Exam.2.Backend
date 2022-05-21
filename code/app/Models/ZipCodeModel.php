<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class ZipCodeModel
        extends Model
    {
        use HasFactory;

        protected $table = 'zip_codes';

        protected $fillable =
        [
            'area_name',
            'zip_number',
            'country_id'
        ];


        protected $hidden =
        [
            'country_id'
        ];


        protected $casts =
        [

        ];
    }
?>