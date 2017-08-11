<?php
Route::group(['middleware' => ['web']],function(){
    Route::resource('CrudActions','\Ashrafi\CrudActions\TestController');
});
