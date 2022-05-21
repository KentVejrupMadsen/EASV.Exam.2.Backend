<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class SecurityRecaptcha
        extends Model
    {
        use HasFactory;

        protected $table = 'security_configuration';

        public $timestamps = false;

        protected $fillable =
        [
            'success',
            'score',
            'at_date',
            'hostname',
            'error'
        ];


        protected $hidden =
        [
            'hostname',
            'error'
        ];


        protected $casts =
        [

        ];
    }
?>