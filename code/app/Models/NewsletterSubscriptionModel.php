<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;



    class NewsletterSubscriptionModel
        extends Model
    {
        use HasFactory;

        protected $table = 'newsletter_users';

        public $timestamps = false;

        protected $fillable =
        [
            'email_id'
        ];


        protected $hidden =
        [
            'email_id'
        ];


        protected $casts =
        [

        ];
    }
?>