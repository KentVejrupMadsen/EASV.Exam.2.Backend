<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class NewsletterSubscriptionModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        protected $table = 'newsletter_users';

            // Const
        protected const field_email_id = 'email_id';
        protected const field_options  = 'options';


        protected $fillable =
        [
            self::field_email_id,
            self::field_options
        ];


        protected $hidden =
        [
            self::field_email_id
        ];


        protected $casts =
        [
            self::field_email_id => 'integer'
        ];
    }
?>