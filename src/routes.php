<?php
Route::group(['middleware' => ['web']],function(){
    Route::resource('ResourceRouteValidator','\Ashrafi\ResourceRouteValidator\TestController');
});
