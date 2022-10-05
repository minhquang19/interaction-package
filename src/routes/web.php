<?php
Route::middleware('web')->group(function () {
    Route::get('interaction', 'Minhquang\Interaction\Http\Controllers\InteractionController@createOrUpdate');
    Route::get('interactionDelete', 'Minhquang\Interaction\Http\Controllers\InteractionController@destroy');
});
