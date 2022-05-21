<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    abstract class ExtensionLabelModel
        extends Model
    {
        use HasFactory;

        protected $fillable =
        [
            'content'
        ];

        public $timestamps = false;
    }
?>
