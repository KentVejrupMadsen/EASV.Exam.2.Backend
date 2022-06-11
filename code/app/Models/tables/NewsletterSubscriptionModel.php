<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Newsletter Subscription Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class NewsletterSubscriptionModel
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( type: 'string' )]
        protected const table_name = 'newsletter_users';

        // Variables
            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

            // Const
        #[OA\Property( type: 'string' )]
        protected const field_email_id = 'email_identity';

        #[OA\Property( type: 'string' )]
        protected const field_account_id = 'account_identity';

        #[OA\Property( type: 'string' )]
        protected const field_options  = 'options';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_email_id,
            self::field_options,
            self::field_account_id
        ];

        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::identity,

            self::field_email_id,
            self::field_account_id
        ];

        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,
            self::field_email_id => self::typeInteger,
            self::field_account_id => self::typeInteger,

            self::field_options => self::typeArray
        ];
    }
?>