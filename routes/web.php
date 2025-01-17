<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\SupportController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;


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

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class,'index'])->middleware(
    [

        'XSS',
    ]
);
Route::get('home', [HomeController::class,'index'])->name('home')->middleware(
    [

        'XSS',
    ]
);
Route::get('dashboard', [HomeController::class,'index'])->name('dashboard')->middleware(
    [

        'XSS',
    ]
);

//-------------------------------User-------------------------------------------

Route::resource('users', UserController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);


 

//-------------------------------Subscription Payment-------------------------------------------

 Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function (){
    Route::get('settings/account', [SettingController::class,'account'])->name('setting.account');
    Route::post('settings/account', [SettingController::class,'accountData'])->name('setting.account');
    Route::delete('settings/account/delete', [SettingController::class,'accountDelete'])->name('setting.account.delete');

    Route::get('settings/password', [SettingController::class,'password'])->name('setting.password');
    Route::post('settings/password', [SettingController::class,'passwordData'])->name('setting.password');

    Route::get('settings/general', [SettingController::class,'general'])->name('setting.general');
    Route::post('settings/general', [SettingController::class,'generalData'])->name('setting.general');

    Route::get('settings/smtp', [SettingController::class,'smtp'])->name('setting.smtp');
    Route::post('settings/smtp', [SettingController::class,'smtpData'])->name('setting.smtp');

    Route::get('settings/payment', [SettingController::class,'payment'])->name('setting.payment');
    Route::post('settings/payment', [SettingController::class,'paymentData'])->name('setting.payment');

    Route::get('settings/company', [SettingController::class,'company'])->name('setting.company');
    Route::post('settings/company', [SettingController::class,'companyData'])->name('setting.company');

    Route::get('language/{lang}', [SettingController::class,'lanquageChange'])->name('language.change');
    Route::post('theme/settings', [SettingController::class,'themeSettings'])->name('theme.settings');

    Route::get('settings/site-seo', [SettingController::class,'siteSEO'])->name('setting.site.seo');
    Route::post('settings/site-seo', [SettingController::class,'siteSEOData'])->name('setting.site.seo');

    Route::get('settings/google-recaptcha', [SettingController::class,'googleRecaptcha'])->name('setting.google.recaptcha');
    Route::post('settings/google-recaptcha', [SettingController::class,'googleRecaptchaData'])->name('setting.google.recaptcha');
}
);


//-------------------------------Role & Permissions-------------------------------------------
Route::resource('user_permission', PermissionController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

Route::resource('role', RoleController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);




//-------------------------------Note-------------------------------------------
Route::resource('note', NoticeBoardController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

//-------------------------------Contact-------------------------------------------
Route::resource('contact', ContactController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);


//-------------------------------Support-------------------------------------------

Route::post('support/reply/{id}', [SupportController::class,'reply'])->name('support.reply')->middleware(
    [
        'auth',
        'XSS',
    ]
);
Route::resource('support', SupportController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

//-------------------------------logged History-------------------------------------------

Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::get('logged/history', [UserController::class,'loggedHistory'])->name('logged.history');
    Route::get('logged/{id}/history/show', [UserController::class,'loggedHistoryShow'])->name('logged.history.show');
    Route::delete('logged/{id}/history', [UserController::class,'loggedHistoryDestroy'])->name('logged.history.destroy');
});

//-------------------------------Parking Zone-------------------------------------------
Route::resource('parking-zone', ParkingZoneController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

//-------------------------------Vehicle Type-------------------------------------------
Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::resource('vehicle-type', VehicleTypeController::class);
    Route::get('zone/{id}/type', [VehicleTypeController::class,'getvehicleType'])->name('zone.type');
});



//-------------------------------Floor-------------------------------------------

Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::resource('floor', FloorController::class);
    Route::get('zone/{id}/floor', [FloorController::class,'getFloor'])->name('zone.floor');
});



//-------------------------------Parking Rate-------------------------------------------

Route::resource('parking-rate', ParkingRateController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

//-------------------------------Parking Slot-------------------------------------------


Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::resource('parking-slot', ParkingSlotController::class);
    Route::get('zone/{zid}/floor/{fid}/type/{tid}', [ParkingSlotController::class,'getSlot'])->name('zone.floor.slot');
});


//-------------------------------RFID Vehicle-------------------------------------------

Route::resource('rfid-vehicle', RfidVehicleController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);

 

 


// Employee management create edit delete 

Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::resource('employee', EmployeeController::class);
    
});

//for job posting
Route::group(
    [
        'middleware' => [
            'auth',
            'XSS',
        ],
    ], function () {

    Route::resource('job', JobController::class);
    
});
 

// job showing in



Route::resource('employee', EmployeeController::class)->middleware(
    [
        'auth',
        'XSS',
    ]
);
 
 