<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use MeiliSearch\Client;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('sortable', function () {
    $client = new Client(config('scout.meilisearch.host'));

    $client->index('users')->updateSortableAttributes(['id', 'name', 'email']);
})->purpose('Display an inspiring quote');
