<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    abstract class ExtensionLabelModel
        extends Model
    {
        use HasFactory;
        public $timestamps = false;

        protected $fillable =
        [
            'content'
        ];


        protected $casts =
        [
            'content' => 'string'
        ];
    }
?>
