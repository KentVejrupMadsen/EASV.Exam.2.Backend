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
        public const table_name = 'newsletter_users';

        // Variables
            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

            // Const
        #[OA\Property( type: 'string' )]
        public const field_email_id = 'email_id';

        #[OA\Property( type: 'string' )]
        public const field_options  = 'options';

        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_email_id,
            self::field_options
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_email_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_email_id => self::typeInteger
        ];
    }
?>