<?php



Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
    	$sources = \App\Models\Source::whereNull('parent_id')->get();
        return view('welcome', [
            'sources' => $sources,
        ]);
    })->middleware('guest');


// Route::get('catalog', 'CatalogController@index');//
// Route::get('catalog/category/{id}', 'CatalogController@category');
// Route::get('catalog/product/{id}', 'CatalogController@product');
// // CRAWLING
// Route::get('crawler/collectCategories', 'CrawlerController@collectCategories');
// Route::get('crawler/collectProducts', 'CrawlerController@collectProducts');
// Route::get('crawler/updateProducts', 'CrawlerController@updateProducts');
// Route::get('crawler/updatePictures', 'CrawlerController@updatePictures');


Route::get('sources', 'SourcesController@index');//
Route::get('source/{id}', 'SourcesController@source');

    Route::auth();

});
//----------------------------------------------------------------------------
// ADD 
// Route::any('p/add', 'CatalogController@addP');
// Route::any('product/add', 'CatalogController@addProduct');
// Route::any('product/change', 'CatalogController@changeProduct');
// Route::any('product/remove', 'CatalogController@removeProduct');
// Route::any('catalog/add', 'CatalogController@addCategory');
// Route::any('catalog/change', 'CatalogController@changeCategory');
// Route::any('catalog/remove', 'CatalogController@removeCategory');
//Route::get('add/category', 'ProductsController@addCategory');
