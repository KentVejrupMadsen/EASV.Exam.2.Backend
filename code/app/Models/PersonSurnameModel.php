<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class PersonSurnameModel
        extends ExtensionLabelModel
    {
        use HasFactory;

        protected $table = 'person_name_middle_and_last';


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
