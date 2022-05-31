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


    function AddressApi()
    {
        Route::prefix( 'address' )->group
        (
            function()
            {
                Route::controller( PersonAddressController::class )->group
                (
                    function()
                    {
                        Route::get(entitiesAddressReadRoute, 'read');
                        Route::post(entitiesAddressCreateRoute, 'create');
                        Route::patch(entitiesAddressUpdateRoute, 'update' );
                        Route::delete(entitiesAddressDeleteRoute, 'delete');
                    }
                );
            }
        );
    }
?>