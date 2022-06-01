<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;

    use OpenApi\Attributes
        as OA;


    #[OA\Info( version: '1.06.2022', title: 'Kanban-Project-Backend-API') ]
    #[OA\Contact(name: 'kent vejrup madsen', url: 'https://github.com/KentVejrupMadsen', email: 'kent.vejrup.madsen@protonmail.com')]
    #[OA\Server( url: 'https://kanban.goalpioneers.com/' )]
    #[OA\License( name: 'MIT License', url: 'https://github.com/KentVejrupMadsen/Kanban-Project-Backend/blob/main/License.md')]
    final class OpenApi
        extends Controller
    {

    };
?>