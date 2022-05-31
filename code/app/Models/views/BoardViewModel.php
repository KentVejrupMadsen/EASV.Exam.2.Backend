<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    final class BoardViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'boards_view';


        protected $fillable =
        [
            'id',
            'kanban_id',
            'board_title',
            'body',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'id',
            'kanban_id',
        ];


        protected $casts =
        [
            'id'        => 'integer',
            'kanban_id' => 'integer',

            'board_title'   => 'string',
            'body'          => 'array',

            'created_at'    => 'timestamp',
            'updated_at'    => 'timestamp'
        ];
    }
?>