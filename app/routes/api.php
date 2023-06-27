<?php

use App\Http\Controllers\BookController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', function () {
    $credentials = request(['email', 'password']);

    if (!auth()->attempt($credentials)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user = request()->user();

    $token = $user->createToken('authToken')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
    ]);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('books', BookController::class);

    Route::post('/logout', function () {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out']);
    });
});
