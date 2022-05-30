<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\BaseModel;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class BoardModel
        extends BaseModel
    {
        protected $table = 'boards';

        protected $fillable = 
        [
            'kanban_id',
            'board_title_id',
        ];

        
        protected $hidden = 
        [
            'kanban_id',
            'board_title_id',
        ];

        
        protected $casts = 
        [
            'kanban_id' => 'integer',
            'board_title_id' => 'integer'
        ];
    }
?>
