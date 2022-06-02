<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\BaseModel;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;

    /**
     *
     */
    #[OA\Schema()]
    class AddressModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'addresses';

        public $timestamps = false;
        protected $table = self::table_name;


        #[OA\Property( )]
        protected $fillable =
        [
            'account_information_id',
            'road_name_id',
            'road_number',
            'levels',
            'country_id',
            'zip_code_id'
        ];


        protected $hidden =
        [
            'country_id',
            'zip_code_id',
            'road_name_id',
            'account_information_id',
        ];


        protected $casts =
        [
            'account_information_id' => 'integer',
            'road_name_id'           => 'integer',
            'road_number'            => 'integer',
            'levels'                 => 'string',
            'country_id'             => 'integer',
            'zip_code_id'            => 'integer'
        ];

    }
?>