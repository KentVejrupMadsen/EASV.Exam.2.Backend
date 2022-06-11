<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Recaptcha Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class RecaptchaModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        #[OA\Property( type: 'string' )]
        protected const table_name = 'security_recaptcha';

        protected $table = self::table_name;
        protected $primaryKey = self::identity;

            // Const
        #[OA\Property( type: 'string' )]
        protected const field_success   = 'success';

        #[OA\Property( type: 'string' )]
        protected const field_score     = 'score';

        #[OA\Property( type: 'string' )]
        protected const field_at_date   = 'at_date';

        #[OA\Property( type: 'string' )]
        protected const field_hostname  = 'hostname';

        #[OA\Property( type: 'string' )]
        protected const field_error     = 'error';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_success,
            self::field_score,
            self::field_at_date,
            self::field_hostname,
            self::field_error
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_hostname,
            self::field_error
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_success     => 'boolean',
            self::field_score       => 'double',
            self::field_at_date     => 'datetime',
            self::field_hostname    => 'string',
            self::field_error       => 'string'
        ];
    }
?>