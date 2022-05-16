<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class MemberGroupModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'member_groups';
        
        protected $fillable = 
        [
            'content'
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>