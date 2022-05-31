<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\account\entities\PersonAddressController;

    const entitiesAddressRoute = '/' . CURRENT_VERSION . '/account/entities/address';

    const entitiesAddressReadRoute = entitiesAddressRoute . '/read';
    const entitiesAddressCreateRoute = entitiesAddressRoute . '/create';
    const entitiesAddressUpdateRoute = entitiesAddressRoute . '/update';
    const entitiesAddressDeleteRoute = entitiesAddressRoute . '/delete';


    Route::get(
        entitiesAddressReadRoute,
        [ PersonAddressController::class, 'read' ]
    );

    // Create
    Route::post(
        entitiesAddressCreateRoute,
        [ PersonAddressController::class, 'create' ]
    );

    // Update
    Route::patch(
        entitiesAddressUpdateRoute,
        [ PersonAddressController::class, 'update' ]
    );

    // Delete
    Route::delete(
        entitiesAddressDeleteRoute,
        [ PersonAddressController::class, 'delete' ]
    );
?>