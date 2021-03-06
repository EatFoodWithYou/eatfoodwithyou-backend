<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('likes', \App\Http\Controllers\Api\LikeController::class);
Route::get('recipes/category/{slug}', [\App\Http\Controllers\Api\FoodRecipeController::class, 'searchFoodRecipeByCategory'])->name('recipes.category');
Route::get('recipes/randoms',[\App\Http\Controllers\Api\FoodRecipeController::class,'randomFoodRecipes'])->name('recipes.randoms');
Route::get('recipes/random',[\App\Http\Controllers\Api\FoodRecipeController::class,'randomFoodRecipe'])->name('recipes.random');
Route::apiResource('recipes',\App\Http\Controllers\Api\FoodRecipeController::class);
Route::get('recipes/search/{name}',[\App\Http\Controllers\Api\FoodRecipeController::class,'searchFoodRecipes'])->name('recipes.search');

Route::apiResource('ingredients',\App\Http\Controllers\Api\IngredientController::class);
Route::apiResource('processes',\App\Http\Controllers\Api\CookingProcessController::class);

Route::get('categories/{name}', [\App\Http\Controllers\Api\CategoryController::class, 'showByName'])->name('categories.name');
Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);


Route::apiResource('comments',\App\Http\Controllers\Api\CommentController::class);
Route::put('comments/{id}',[\App\Http\Controllers\Api\CommentController::class , 'update']);
Route::get('recipe/comments/{id}',[\App\Http\Controllers\Api\CommentController::class , 'findByRecipeid']);




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\Api\AuthController::class, 'me']);
    Route::get('allUser', [\App\Http\Controllers\Api\AuthController::class, 'index']);
    Route::put('updateStatus/{id}', [\App\Http\Controllers\Api\AuthController::class, 'updateStatus']);

    Route::put('update/{id}', [\App\Http\Controllers\Api\AuthController::class, 'update']);

});
