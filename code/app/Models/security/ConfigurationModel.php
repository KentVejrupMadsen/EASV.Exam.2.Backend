<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class ConfigurationModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const table_name = 'security_configuration';

        #[OA\Property( type: 'string' )]
        public const field_key   = 'key';

        #[OA\Property( type: 'string' )]
        public const field_value = 'value';


        //
        #[OA\Property(
            property: 'fillable',
            schema: ConfigurationModel::class,
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_key,
            self::field_value
        ];


        #[OA\Property(
            property: 'hidden',
            schema: ConfigurationModel::class,
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            self::field_value
        ];


        protected $casts =
        [
            self::field_key   => 'string',
            self::field_value => 'array'
        ];
    }
?>
