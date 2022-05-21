<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    
    /**
     *
     */
    class AccountInformationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'account_informations';

        protected $fillable =
        [
            'account_id',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'account_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
?>
