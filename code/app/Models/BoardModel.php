<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class BoardModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'boards';

        protected $fillable = 
        [
            'kanban_id',
            'board_title_id',
            
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>
