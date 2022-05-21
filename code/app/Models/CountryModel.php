<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class CountryModel
        extends Model
    {
        use HasFactory;

        protected $table = 'countries';

        protected $fillable =
        [
            'country_name',
            'country_acronym'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];

    }
?>