<?php
    namespace App\Models\tables;


    use App\Models\templates\ExtensionNoTimestampModel;

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
            'email_id' => 'integer'
        ];
    }
?>