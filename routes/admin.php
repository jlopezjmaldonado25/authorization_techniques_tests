<?php
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::catch(function () {
    throw new NotFoundHttpException;
});

Route::get('/', 'DashboardController@index')->name('admin_dashboard');

Route::get('/events', function () {
    return 'Admin Events';
})->name('admin_events');

Route::post('/events/create', function () {
    return 'Event created!';
});


//Route::get('/', function() {
    //return response()
    //->view('/admin/dashboard');
// Ejemplo usando la clase directamente
    //})->name('admin_dashboard')->middleware(['auth',App\Http\Middleware\Admin::class]);
//})->name('admin_dashboard');

//Route::any('{any}', function(){
    //throw new NotFoundHttpException('Página no Encontrada');
//})->where('any','.*');

//Route::fallback(function(){
    //return response('Página no Encontrada', Response::HTTP_NOT_FOUND);
    //return response()->view('errors/404',[], Response::HTTP_NOT_FOUND);
    //throw new NotFoundHttpException('Página no Encontrada');
//});
?>
