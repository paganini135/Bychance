<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

// Route::post('/contact',[App\Http\Controllers\ContactController::class, 'store'])->name('contacts');

Route::get('/about', function(){
    return view('bct_about/about');
})->name('about');

Route::get('/location', function(){
    return view('bct_about/location');
})->name('location');

Route::get('/service', function(){
    return view('about_service/service');
})->name('service');

Route::get('/portfolio', function(){
    return view('portfolio_list/portfolio');
})->name('portfolio');

Route::get('/portfolio_2', function(){
    return view('portfolio_list/portfolio_2');
})->name('portfolio_2');

Route::get('/portfolio_3', function(){
    return view('portfolio_list/portfolio_3');
})->name('portfolio_3');

Route::get('/portfolio_4', function(){
    return view('portfolio_list/portfolio_4');
})->name('portfolio_4');

Route::get('/portfolio_detail', function(){
    return view('portfolio_list/portfolio_detail');
})->name('portfolio_detail');

Route::get('/qna', function(){
    return view('service_center/qna');
})->name('qna');

Route::get('/contact', function(){
    return view('service_center/contact');
})->name('contact');

Route::get('/simple_contact', function(){
    return view('service_center/simple_contact');
})->name('simple_contact');

Route::get('/detail_contact', function(){
    return view('service_center/detail_contact');
})->name('detail_contact');

// 백엔드 전 임시 라우팅 처리 
Route::get('/catal_1', function(){
    return view('portfolio_catal/catal_1');
})->name('catal_1');

Route::get('/catal_2', function(){
    return view('portfolio_catal/catal_2');
})->name('catal_2');

Route::get('/catal_3', function(){
    return view('portfolio_catal/catal_3');
})->name('catal_3');

// 영상
Route::get('/video_1', function(){
    return view('portfolio_video/video_1');
})->name('video_1');

Route::get('/video_2', function(){
    return view('portfolio_video/video_2');
})->name('video_2');

Route::get('/video_3', function(){
    return view('portfolio_video/video_3');
})->name('video_3');

Route::get('/video_4', function(){
    return view('portfolio_video/video_4');
})->name('video_4');

Route::get('/video_5', function(){
    return view('portfolio_video/video_5');
})->name('video_5');

Route::get('/video_6', function(){
    return view('portfolio_video/video_6');
})->name('video_6');
// 백엔드 전 임시 라우팅 처리

// 관리자

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin');
    });

    Route::get('/user_portfolio', function(){
        return view('admin/portfolio');
    })->name('user_portfolio');

    Route::get('/port_add', function(){
        return view('admin/port_add');
    })->name('port_add');

    // 상담신청현황 view
    Route::get('/user_contact',[ContactController::class, 'Contacts'])->name('user_contact');
    // Route::get('/user_contact', function(){
    //     return view('admin/contact');
    // })->name('user_contact');

    Route::get('/simple__contact', function(){
        return view('admin/simple__contact');
    })->name('simple__contact');

    Route::get('/detail__contact', function(){
        return view('admin/detail__contact');
    })->name('detail__contact');
});



