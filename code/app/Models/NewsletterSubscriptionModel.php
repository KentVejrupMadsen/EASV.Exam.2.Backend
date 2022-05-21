<?php
    namespace App\Models;


    class NewsletterSubscriptionModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'newsletter_users';

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