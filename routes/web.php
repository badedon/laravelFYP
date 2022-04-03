<?php
//adding candidates controller path
use App\Http\Controllers\Candidates\CandidatesController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Userpanel\Contact\ContactController;
use App\Http\Controllers\VotingResult\ResultController;
use App\Http\Controllers\Admin\UsersController;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\Userpanel\Userhome\UserhomeController;
use App\Http\Controllers\Userpanel\Vote\VoteController;
use App\Http\Controllers\Userpanel\Userevent\UsereventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.layout.master');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Routing for Candidates

Route::get('/candidates',[CandidatesController::class,'candidatesAdmin'])->name('candidates');
Route::post('/create-candidates',[CandidatesController::class,'createCandidates'])->name('candidates.create');
Route::get('/candidatess',[CandidatesController::class,'getCandidates']);
Route::get('/candidatess/{id}',[CandidatesController::class,'getCandidatesById']);
Route::get('/delete-candidates/{id}',[CandidatesController::class,'deleteCandidates']);
Route::get('/edit-candidates/{id}',[CandidatesController::class,'editCandidates']);
Route::put('/update-candidates',[CandidatesController::class,'updateCandidates'])->name('candidates.update');

//Routing for user
Route::get('/users',[UsersController::class,'usersAdmin'])->name('users');
Route::post('/create-users',[UsersController::class,'createUsers'])->name('users.create');


//routing for event
Route::get('/event',[EventController::class,'eventAdmin'])->name('event');
Route::post('/create-event',[EventController::class,'createEvent'])->name('event.create');
Route::get('/events',[EventController::class,'getEvent']);
Route::get('/events/{id}',[EventController::class,'getEventById']);
Route::get('/delete-event/{id}',[EventController::class,'deleteEvent']);
Route::get('/edit-event/{id}',[EventController::class,'editEvent']);
Route::put('/update-event',[EventController::class,'updateEvent'])->name('event.update');




//routing for voting result
Route::get('/result',[ResultController::class,'resultAdmin'])->name('result');

//
//// routing for home of user panel
Route::get('/userhome',[UserhomeController::class,'index'])->name('frontend.layout.userhome');;
//
////routing for vote page of user panel
Route::get('/uservote',[VoteController::class,'index'])->name('frontend.Vote.uservote');

//
//routing for event page of user panel
Route::get('/user-event',[UsereventController::class,'index'])->name('frontend.Event.userevent');

//routing for contact page of user panel
Route::get('/contact',[ContactController::class,'index'])->name('frontend.Contact.contact');
