<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ApiController;

    require_once 'api/accountApi.php';
    require_once 'api/accountEmailApi.php';
    require_once 'api/boardApi.php';
    require_once 'api/kanbanApi.php';
    require_once 'api/projectApi.php';
    require_once 'api/securityApi.php';
    require_once 'api/taskApi.php';


    Route::get(
        '/',
        [ ApiController::class, 'home' ]
    );

?>