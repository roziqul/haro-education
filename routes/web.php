<?php

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
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'showDashboard']);
Route::get('/program', [\App\Http\Controllers\DashboardController::class, 'showProgram']);
Route::get('/tentangHARO', [\App\Http\Controllers\DashboardController::class, 'showAbout']);
Route::get('/testimoni', [\App\Http\Controllers\DashboardController::class, 'showTestimoni']);
Route::get('/berita', [\App\Http\Controllers\DashboardController::class, 'showBerita']);
Route::get('/berita/{id}', [\App\Http\Controllers\DashboardController::class, 'detailBerita']);

////////////// ADMIN ROUTES //////////////

//ADM-Tutor
Route::get('/Adm/Tutor'                 , [\App\Http\Controllers\AdminController::class, 'Tutor'      ])->name('TutorShow'  );
Route::get('/Adm/Tutor/Create'          , [\App\Http\Controllers\AdminController::class, 'createTutor'])->name('TutorCreate');
Route::get('/Adm/Tutor/{id}/Edit'       , [\App\Http\Controllers\AdminController::class, 'editTutor'  ])->name('TutorEdit'  );
Route::get('/Adm/Tutor/{id}/Delete'     , [\App\Http\Controllers\AdminController::class, 'deleteTutor'])->name('TutorDelete');
Route::post('/Adm/Tutor/Save'           , [\App\Http\Controllers\AdminController::class, 'saveTutor'  ])->name('TutorSave'  );
Route::post('/Adm/Tutor/Update'         , [\App\Http\Controllers\AdminController::class, 'updateTutor'])->name('TutorUpdate');

//ADM-Mentor
Route::get('/Adm/Mentor'                , [\App\Http\Controllers\AdminController::class, 'Mentor'      ])->name('MentorShow'  );
Route::get('/Adm/Mentor/Create'         , [\App\Http\Controllers\AdminController::class, 'createMentor'])->name('MentorCreate');
Route::get('/Adm/Mentor/{id}/Edit'      , [\App\Http\Controllers\AdminController::class, 'editMentor'  ])->name('MentorEdit'  );
Route::get('/Adm/Mentor/{id}/Delete'    , [\App\Http\Controllers\AdminController::class, 'deleteMentor'])->name('MentorDelete');
Route::post('/Adm/Mentor/Save'          , [\App\Http\Controllers\AdminController::class, 'saveMentor'  ])->name('MentorSave'  );
Route::post('/Adm/Mentor/Update'        , [\App\Http\Controllers\AdminController::class, 'updateMentor'])->name('MentorUpdate');

//ADM-Berita
Route::get('/Adm/Berita'                , [\App\Http\Controllers\AdminController::class, 'Berita'      ])->name('BeritaShow'  );
Route::get('/Adm/Berita/Create'         , [\App\Http\Controllers\AdminController::class, 'createBerita'])->name('BeritaCreate');
Route::get('/Adm/Berita/{id}/Edit'      , [\App\Http\Controllers\AdminController::class, 'editBerita'  ])->name('BeritaEdit'  );
Route::get('/Adm/Berita/{id}/Delete'    , [\App\Http\Controllers\AdminController::class, 'deleteBerita'])->name('BeritaDelete');
Route::post('/Adm/Berita/Save'          , [\App\Http\Controllers\AdminController::class, 'saveBerita'  ])->name('BeritaSave'  );
Route::post('/Adm/Berita/Update'        , [\App\Http\Controllers\AdminController::class, 'updateBerita'])->name('BeritaUpdate');

//ADM-Program
Route::get('/Adm/Program'               , [\App\Http\Controllers\AdminController::class, 'Program'      ])->name('ProgramShow'  );
Route::get('/Adm/Program/Create'        , [\App\Http\Controllers\AdminController::class, 'createProgram'])->name('ProgramCreate');
Route::get('/Adm/Program/{id}/Edit'     , [\App\Http\Controllers\AdminController::class, 'editProgram'  ])->name('ProgramEdit'  );
Route::get('/Adm/Program/{id}/Delete'   , [\App\Http\Controllers\AdminController::class, 'deleteProgram'])->name('ProgramDelete');
Route::post('/Adm/Program/Save'         , [\App\Http\Controllers\AdminController::class, 'saveProgram'  ])->name('ProgramSave'  );
Route::post('/Adm/Program/Update'       , [\App\Http\Controllers\AdminController::class, 'updateProgram'])->name('ProgramUpdate');

//ADM-Customer
Route::get('/Adm/Customer'              , [\App\Http\Controllers\AdminController::class, 'Customer'      ])->name('CustomerShow'  );
Route::get('/Adm/Customer/Create'       , [\App\Http\Controllers\AdminController::class, 'createCustomer'])->name('CustomerCreate');
Route::get('/Adm/Customer/{id}/Edit'    , [\App\Http\Controllers\AdminController::class, 'editCustomer'  ])->name('CustomerEdit'  );
Route::get('/Adm/Customer/{id}/Delete'  , [\App\Http\Controllers\AdminController::class, 'deleteCustomer'])->name('CustomerDelete');
Route::post('/Adm/Customer/Save'        , [\App\Http\Controllers\AdminController::class, 'saveCustomer'  ])->name('CustomerSave'  );
Route::post('/Adm/Customer/Update'      , [\App\Http\Controllers\AdminController::class, 'updateCustomer'])->name('CustomerUpdate');

//ADM-Testimoni
Route::get('/Adm/Testimoni'             , [\App\Http\Controllers\AdminController::class, 'Testimoni'      ])->name('TestimoniShow'  );
Route::get('/Adm/Testimoni/Create'      , [\App\Http\Controllers\AdminController::class, 'createTestimoni'])->name('TestimoniCreate');
Route::get('/Adm/Testimoni/{id}/Edit'   , [\App\Http\Controllers\AdminController::class, 'editTestimoni'  ])->name('TestimoniEdit'  );
Route::get('/Adm/Testimoni/{id}/Delete' , [\App\Http\Controllers\AdminController::class, 'deleteTestimoni'])->name('TestimoniDelete');
Route::post('/Adm/Testimoni/Save'       , [\App\Http\Controllers\AdminController::class, 'saveTestimoni'  ])->name('TestimoniSave'  );
Route::post('/Adm/Testimoni/Update'     , [\App\Http\Controllers\AdminController::class, 'updateTestimoni'])->name('TestimoniUpdate');









