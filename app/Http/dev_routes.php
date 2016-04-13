<?php
/*
|--------------------------------------------------------------------------
| Development Routes  include 'developer_routes.php';
|--------------------------------------------------------------------------
|
| Routes for developer information
|
*/

Route::get('env', function () {
    dd(App::environment());
});

Route::get('info', function () {
    if (App::environment() != 'production') {
        phpinfo();
    }
});

Route::get('/r', function () {
    function philsroutes() {
        $routeCollection = Route::getRoutes();
        echo "<table style='width:100%'>";
        echo '<tr>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';
        foreach ($routeCollection as $value) {
            echo '<tr>';
            echo '<td>' . $value->getMethods()[0] . '</td>';
            echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . '</a> </td>';
            echo '<td>' . $value->getActionName() . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    return philsroutes();
});

Route::get('migrate', function () {
    \Artisan::call('migrate:refresh');
    return '<pre>' . \Artisan::output() . '</pre>';
//  return '<a href="' . $value->getPath() . '"  target="_blank">' . \Artisan::output() . '</a>';
//  echo "<td><a href='" . $value->getPath() . "' target='_blank'>' . \Artisan::output() . '</a>    </td>";
});

Route::get('routes', function () {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';

});

Route::get('/paths', function () {
    function philspaths()
    {
    // $routeCollection = Route::getRoutes();
        foreach (Route::getRoutes() as $route) {
            $compiled = $route->getCompiled();
            if(!is_null($compiled))
            {
                var_dump($compiled->getStaticPrefix());
            }
        }
    }
    return philspaths();
});




// View::creator('*', function ($view)
// {
//     View::share('viewName', $view->getName());
// });

// // debug view name in views
// View::creator('*', function ($view)
// {
//     echo '<pre class="debug viewname">' . $view->getName() . '</pre>';
// });





Route::get('/p', function () {
    function philspaths()
    {
        foreach (Route::getRoutes() as $route) {
            $compiled = $route->getCompiled();
            if (!is_null($compiled)) {
                var_dump($compiled->getStaticPrefix());
            }
        }
    }
    return philspaths();
});

/*
|--------------------------------------------------------------------------
|live routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{
   // require('live_routes.php');
});






