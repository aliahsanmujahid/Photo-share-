<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FollowController;
// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/',[FrontendController::class, 'index']);
Route::get('/{id}/category',[FrontendController::class, 'albumCategory'])->name('album.category');
Route::get('/user/profile/{id}',[FrontendController::class, 'userAlbum'])->name('user.album');


Route::get('/profile',[FollowController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/follow',[FollowController::class, 'followUnfollow'])->middleware('auth');
Route::get('/user/{id}',[FollowController::class, 'userProfilePic'])->middleware('auth');
Route::post('profile-pic',[FollowController::class, 'updateProfilePic'])->middleware('auth');
Route::post('bg-pic',[FollowController::class, 'updatebgPic'])->middleware('auth');
Route::get('/user/bg/{id}',[FollowController::class, 'userbgPic'])->middleware('auth');



Route::put('albums/{id}/edit',[AlbumController::class, 'update'])->middleware('auth');
Route::delete('/albums/{id}/delete',[AlbumController::class, 'destroy'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('album',AlbumController::class)->middleware('auth');
Route::post('/albums/store',[AlbumController::class, 'store'])->middleware('auth');
Route::get('albums/create',[AlbumController::class, 'create'])->name('album.create')->middleware('auth');
Route::get('/albums',[AlbumController::class, 'index'])->middleware('auth');
Route::get('/getalbums',[AlbumController::class, 'getAlbums'])->middleware('auth');


Route::get('upload/images/{id}',[GalleryController::class, 'create'])->middleware('auth');
Route::post('uploadImage',[GalleryController::class, 'upload'])->middleware('auth');
Route::get('getimages',[GalleryController::class, 'images'])->middleware('auth');;
Route::delete('/image/{id}',[GalleryController::class, 'destroy']);
Route::get('/albums/{slug}/{id}',[GalleryController::class, 'viewAlbum'])->name('view.album');