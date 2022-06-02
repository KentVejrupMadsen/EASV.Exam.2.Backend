<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;

    /**
     *
     */
    #[OA\Schema()]
    class ProjectMemberModel 
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        protected $table = 'project_members';

            // constants
        protected const project_id = 'project_id';
        protected const account_id = 'account_id';
        protected const member_group_id = 'member_group_id';


        //
        protected $fillable = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];


        protected $hidden = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];

        
        protected $casts = 
        [
            self::project_id        => 'integer',
            self::account_id        => 'integer',
            self::member_group_id   => 'integer'
        ];
    }
?>