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
    class KanbanViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'kanbans_view';

        protected $fillable =
        [
            'id',
            'project_id',
            'kanban_title',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'id',
            'project_id'
        ];


        protected $casts =
        [
            'id'            => 'integer',

            'project_id'    => 'integer',
            'kanban_title'  => 'string',

            'created_at'    => 'timestamp',
            'updated_at'    => 'timestamp'
        ];
    }
?>
