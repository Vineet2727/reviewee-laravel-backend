<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeatureController;

Route::apiResource('organizations', OrganizationController::class);
Route::apiResource('members', MemberController::class);
Route::apiResource('repositories', RepositoryController::class);
Route::apiResource('commits', CommitController::class);
Route::apiResource('notifications', NotificationController::class);
Route::apiResource('features', FeatureController::class);
