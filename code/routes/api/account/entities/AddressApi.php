<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\account\entities\PersonAddressController;

    const AddressRoute = 'address';

    const AddressReadRoute   = 'read';
    const AddressCreateRoute = 'create';
    const AddressUpdateRoute =  'update';
    const AddressDeleteRoute =  'delete';


    function AddressApi(): void
    {
        Route::prefix( AddressRoute )->group
        (
            function(): void
            {
                Route::controller( PersonAddressController::class )->group
                (
                    function(): void
                    {
                        Route::get( AddressReadRoute, 'read' );
                        Route::post( AddressCreateRoute, 'create' );
                        Route::patch( AddressUpdateRoute, 'update' );
                        Route::delete( AddressDeleteRoute, 'delete');
                    }
                );
            }
        );
    }
?>