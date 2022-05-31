<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    /**
     *
     */
    class ProjectViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'projects_view';

        protected $fillable =
            [
                '',
                '',
                ''
            ];

        protected $hidden =
            [
                '',
            ];


        protected $casts =
            [
                ''    => 'integer',
                ''  => 'datetime',
                ''  => 'datetime',
            ];
    }
?>
