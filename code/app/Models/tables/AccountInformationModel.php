<?php
    namespace App\Models\tables;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class AccountInformationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'account_information_options';

        protected $fillable =
        [
            'account_id',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'account_id',

        ];


        protected $casts =
        [
            'account_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
?>
