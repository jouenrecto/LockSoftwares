<?php

use Illuminate\Http\Request;

Route::post('send', ['as' => 'api.send', 'uses' => 'ContactFormApiController']);