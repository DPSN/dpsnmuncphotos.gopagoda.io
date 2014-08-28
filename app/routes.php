<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  $questions = Question::orderBy('created_at', 'desc')->get();
  return View::make('index')->with('questions', $questions);
});

Route::post('/', function()
{
  $body = Input::get('question');
  if (!empty($body)) {
    $answer = Answer::orderByRaw("RAND()")->get()->first();
    Question::create(array('body' => $body, 'answer' => $answer->body));
  }
  $questions = Question::orderBy('created_at', 'desc')->get();
  return View::make('index')->with('questions', $questions);
});
