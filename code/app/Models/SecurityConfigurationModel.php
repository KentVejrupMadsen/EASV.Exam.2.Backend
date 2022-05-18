<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class SecurityConfigurationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'security_configuration';
        public $timestamps = false;
    }
?>
