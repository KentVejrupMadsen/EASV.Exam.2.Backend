<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers;

	// External
    use OpenApi\Attributes
        as OA;


    #[OA\Info( version: '1.0.0-alpha',
               title: 'kanban_project_backend_api' ) ]

    #[OA\Contact( name: 'kent vejrup madsen',
                  url: 'https://github.com/KentVejrupMadsen',
                  email: 'kent.vejrup.madsen@protonmail.com')]

    #[OA\License( name: 'MIT License',
                  url: 'https://github.com/KentVejrupMadsen/Kanban-Project-Backend/blob/main/License.md' )]

    #[OA\Server( url: 'https://kanban.goalpioneers.com/api/1.0.0',
                 description: 'public available server' )]

    #[OA\Server( url: 'http://localhost:8000/api/1.0.0',
                 description: 'local development server' )]


    #[OA\Tag( name:"1.0.0",
              description: "" )]

    #[OA\Tag( name:"account",
              description: "" )]

    #[OA\Tag( name:"account-additional",
              description: "" )]

    #[OA\Tag( name:"account-options",
              description: "" )]

    #[OA\Tag( name:"newsletter",
              description: "" )]

    #[OA\Tag( name:"tools",
              description: "" )]

    #[OA\Tag( name:"security",
              description: "" )]

    #[OA\Tag( name:"authentication",
              description: "" )]

    final class OpenApi
        extends Controller
    {

    };
?>
