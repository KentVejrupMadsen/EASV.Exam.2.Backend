<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal Libraries
    use App\Models\templates\BaseModel;
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class AccountInformationModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'account_information_options';

        // Variables
            // Model
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_account = 'account_id';

        #[OA\Property( type: 'string' )]
        public const field_created_at = 'created_at';

        #[OA\Property( type: 'string' )]
        public const field_updated_at = 'updated_at';


        //
        #[OA\Property(
            property: 'fillable',
            schema: AccountInformationModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_account,
            self::field_created_at,
            self::field_updated_at
        ];


        protected $hidden =
        [
            self::field_account,
        ];


        protected $casts =
        [
            self::field_account     => 'integer',
            self::field_created_at  => 'datetime',
            self::field_updated_at  => 'datetime',
        ];
    }
?>
