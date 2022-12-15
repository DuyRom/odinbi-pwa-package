<?php

use Illuminate\Support\Facades\Route;
use  Odinbi\Pwa\Http\Controllers\OdinbiPWACustomController;

Route::group(['middleware' => config('odb_pwa.middleware')], function () {

    Route::get('/pwa/assets/{path?}',[OdinbiPWACustomController::class,'asset'])
        ->where('path', '(.*)')
        ->name('pwa.asset');
    Route::get('serviceworker',[OdinbiPWACustomController::class,'serviceWorker'])
        ->name('pwa.serviceworker');
    Route::get('register-serviceworker',[OdinbiPWACustomController::class,'serviceWorkerRegisterContent'])->name('pwa.serviceworker.register');
    Route::get('offline',[OdinbiPWACustomController::class,'offline'])->name('pwa.offline');

    Route::group(['prefix' => 'pwa'], function () {
        Route::get('manifest',[OdinbiPWACustomController::class,'manifest'])->name('pwa.manifest');
        Route::get('install',[OdinbiPWACustomController::class,'index'])->name('pwa');
        Route::get('store',[OdinbiPWACustomController::class,'store'])->name('pwa.store');

        Route::put('store',[OdinbiPWACustomController::class,'update'])->name('pwa.update');
        Route::delete('store',[OdinbiPWACustomController::class,'destroy'])->name('pwa.delete');
        Route::post('activate',[OdinbiPWACustomController::class,'activate'])->name('pwa.activate');
        Route::post('deactivate',[OdinbiPWACustomController::class,'deactivate'])->name('pwa.deactivate');


    });
});

