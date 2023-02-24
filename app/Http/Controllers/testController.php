<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
     public function index()
     {

//         toast()
//         ->info('I will appear only on the next page!')
//         ->pushOnNextPage();

//         toast()
//     ->info('Notification from the backend...', 'The Title')
//     ->push();

toast()
    ->success('welcome to laravel! <br/> this is a notification toast package <br> your can find it <a style="color:blue;" href="https://github.com/usernotnull/tall-toasts">here</a>!','Succes!')
    ->doNotSanitize()
    ->push();

// toast()
//     ->warning('Watch out!')
//     ->push();

// toast()
//     ->danger('I warned you!', 'Yikes')
//     ->push();

toast()
    ->danger('I will go…<br><i>to the next line 💪</i>', 'I am <span style="color:red;">HOT</span>')
    ->doNotSanitize()
    ->push();

// toast()
//     ->debug('I will NOT show in production! Locally, I will also log in console...', 'A Debug Message')
//     ->push();

// debug also accepts objects as message
// toast()
//     ->debug(User::factory()->createOne()->only(['name', 'email']), 'A User Dump')
//     ->push();

        return view('welcome');
     }
}
