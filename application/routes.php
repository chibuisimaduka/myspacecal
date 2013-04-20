<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', array('uses'=>'home::home@index'));

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/




Event::listen("app.400",
        function() {

            $response = new stdClass;
            $response->code = 400;
            $response->messages[] = Lang::line("account::events.messages.invalidinput")
                    ->get();
            return Response::json($response, $response->code);
        });


Event::listen("app.500",
        function() {

            $response = new stdClass;
            $response->code = 500;
            $response->messages[] = Lang::line("account::events.messages.500")
                    ->get();
            return Response::json($response, $response->code);
        });

Event::listen("app.404",
        function($message = null) {
            $response = new stdClass();
            $response->code = 404;
            if (is_null($message))
                $response->messages[] = Lang::line("account::messages.404")->get();
            else
                $response->messages[] = $message;
            return Response::json($response, 404);
        });

Event::listen("app.validationerror",
        function ( $code, $messages) {

            $response = new stdClass();
            if (is_array($messages))
                $response->messages = $messages;
            else
                $response->messages[] = $messages;

            $response->code = $code;
            return Response::json($response, $response->code);
        });
        




Event::listen("app.success",
        function ($code, $messages = null, $data = null) {
            $response = new stdClass();
            $response->code = $code;
            if (is_array($messages))
                $response->messages = $messages;
            elseif (!is_null($messages))
                $response->messages[] = $messages;
            if (!is_null($data)) {
                if (is_a($data, "\Laravel\Paginator")) {
                    $dataArray = array();
                    foreach ($data->results as $object) {
                        array_push($dataArray, $object->to_array());
                    }
                    $response->data = $data;
                    $response->data->results = $dataArray;
                }
                else {
                    $response->data = $data;
                }
            }


            return Response::json($response, $response->code);
        });



Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});