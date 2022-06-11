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
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class RecaptchaModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Const
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false)]
        protected const table_name = 'security_recaptcha';

        #[OA\Property( title:'success column',
                       type: self::typeBoolean,
                       deprecated: false )]
        protected const field_success   = 'success';

        #[OA\Property( title:'score column',
                       type: self::typeDouble,
                       deprecated: false )]
        protected const field_score     = 'score';

        #[OA\Property( title:'at date column',
                       type: self::typeTimestamp,
                       deprecated: false )]
        protected const field_at_date   = 'at_date';

        #[OA\Property( title:'hostname column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_hostname  = 'hostname';

        #[OA\Property( title:'error column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_error     = 'error';


            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::identity,
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
            self::identity,
            self::field_hostname,
            self::field_error
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity          => self::typeInteger,
            self::field_success     => self::typeBoolean,
            self::field_score       => self::typeDouble,
            self::field_at_date     => self::typeDatetime,
            self::field_hostname    => self::typeString,
            self::field_error       => self::typeString
        ];
    }
?>