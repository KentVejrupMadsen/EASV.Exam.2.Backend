<?php
    namespace App\Models\templates;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


abstract class ExtensionNoTimestampModel
        extends Model
    {
        use HasFactory;
        public $timestamps = false;
    }
?>
