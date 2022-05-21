<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class PersonFirstnameModel
        extends Model
    {
        use HasFactory;

        protected $table = 'person_name_middle_and_last';

        public $timestamps = false;

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
