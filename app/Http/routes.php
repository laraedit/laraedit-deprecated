<?php

Route::get('/', function () {
    return view('layout');
});

Route::get('/editor', function () {
    return view('workspaces.editor');
});

Route::get('/terminal', function () {
    return view('workspaces.terminal');
});
