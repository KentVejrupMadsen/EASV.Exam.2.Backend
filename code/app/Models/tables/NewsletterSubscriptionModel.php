<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
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