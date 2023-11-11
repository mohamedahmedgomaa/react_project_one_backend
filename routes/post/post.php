<?php

use Illuminate\Support\Facades\Route;


Route::apiResources([
    'post' => App\Http\Modules\Posts\Controllers\PostController::class,
]);
