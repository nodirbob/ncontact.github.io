<?php

route::get('/', 'indexController@index')->name('index');
route::post('/', 'indexController@processing')->name('processing');
route::get('/contacts', 'indexController@contacts')->name('contacts');
route::get('/view/{id}', 'indexController@view')->name('view');
route::get('/contacts/edit/{id}', 'indexController@edit')->name('edit');
route::patch('/contacts/edit/{id}', 'indexController@update')->name('edit-update');
route::delete('/contacts/delete/{delete}', 'indexController@delete')->name('delete');
route::get('/search', 'indexController@search')->name('search');


