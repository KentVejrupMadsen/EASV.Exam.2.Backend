<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class RecaptchaModel
        extends Model
    {
        use HasFactory;

        protected $table = 'security_recaptcha';
        public $timestamps = false;


    }
?>
