<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\templates;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'View',
                 description: '',
                 type: 'view' )]
    abstract class ModelView
        extends BaseModel
    {
        #[OA\Property(type: 'boolean')]
        public $timestamps = false;
    }
?>
