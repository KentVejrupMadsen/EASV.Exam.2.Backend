<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class AddressRoadNameModel
        extends Model
    {
        use HasFactory;

        protected $table = 'address_road_names';

        protected $fillable =
        [
            'content'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
