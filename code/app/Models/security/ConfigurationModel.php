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
        #[OA\Property()]
        public const table_name = 'security_configuration';

        #[OA\Property()]
        public const field_key   = 'key';
        #[OA\Property()]
        public const field_value = 'value';


        //
        protected $fillable =
        [
            self::field_key,
            self::field_value
        ];


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
