<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class KanbanModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'kanbans';

        protected $fillable = 
        [
            'kanban_title_id',
            'project_id'
        ];

        
        protected $hidden = 
        [
            'kanban_title_id',
            'project_id'
        ];

        
        protected $casts = 
        [
            'kanban_title_id'   => 'integer',
            'project_id'        => 'integer'
        ];
    }
?>