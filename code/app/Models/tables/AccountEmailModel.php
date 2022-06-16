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
    use App\Models\tables\templates\ExtensionLabelModel;


    // External libraries
    use Illuminate\Database\Eloquent\Relations\HasOne;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account Email Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class AccountEmailModel 
        extends ExtensionLabelModel
    {
        // Variables
            // constants
        #[OA\Property( title: 'Account emails table name',
                       type: self::typeDatabaseModel,
                       deprecated: false )]
        protected const table_name = 'account_emails';

                // fields
        protected const field_content = ExtensionLabelModel::field_content;

            // Models
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

        // Relationships
        /**
         * @return HasOne
         */
        public final function newsletterSubscription(): HasOne
        {
            return $this->hasOne( NewsletterSubscriptionModel::class,
                                  NewsletterSubscriptionModel::getFieldEmailIdentity(),
                                  self::identity );
        }

        /**
         * @return HasOne
         */
        public final function Account(): HasOne
        {
            return $this->hasOne( User::class,
                                  User::getFieldEmailIdentity(),
                                  self::identity );
        }
    }
?>