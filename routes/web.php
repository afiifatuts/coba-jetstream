<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'pageTitle' => 'Dashboard',
        ];
        return view('dashboard')->with($data);
    })->name('dashboard');
    // Route Master
    Route::get('/master/bnh', function () {
        return view('master.bnh');
    })->name('master.bhn');
    Route::get('/master/nba', function () {
        return view('master.nba');
    })->name('master.nba');
    Route::get('/master/rte', function () {
        return view('master.rte');
    })->name('master.rte');
    Route::get('/master/msl', function () {
        return view('master.msl');
    })->name('master.msl');
    Route::get('/master/msl', function () {
        return view('master.msl');
    })->name('master.msl');
    Route::get('/master/mba', function () {
        return view('master.mba');
    })->name('master.mba');
    Route::get('/master/msp', function () {
        return view('master.msp');
    })->name('master.msp');
    Route::get('/master/dob', function () {
        return view('master.dob');
    })->name('master.dob');
    Route::get('/master/msc', function () {
        return view('master.msc');
    })->name('master.msc');
    Route::get('/master/plh', function () {
        return view('master.plh');
    })->name('master.plh');
    Route::get('/master/cmp', function () {
        return view('master.cmp');
    })->name('master.cmp');
    Route::get('/master/mrc', function () {
        return view('master.mrc');
    })->name('master.mrc');
    // Route Transaction
    Route::get('/transaction/sti', function () {
        return view('transaction.sti');
    })->name('transaction.sti');
    Route::get('/transaction/sts', function () {
        return view('transaction.sts');
    })->name('transaction.sts');
    Route::get('/transaction/cki', function () {
        return view('transaction.cki');
    })->name('transaction.cki');
    Route::get('/transaction/ckp', function () {
        return view('transaction.ckp');
    })->name('transaction.ckp');
    Route::get('/transaction/bti', function () {
        return view('transaction.bti');
    })->name('transaction.bti');
    Route::get('/transaction/bts', function () {
        return view('transaction.bts');
    })->name('transaction.bts');
    Route::get('/transaction/gti', function () {
        return view('transaction.gti');
    })->name('transaction.gti');
    Route::get('/transaction/gts', function () {
        return view('transaction.gts');
    })->name('transaction.gts');
    Route::get('/transaction/tti', function () {
        return view('transaction.tti');
    })->name('transaction.tti');
    Route::get('/transaction/tts', function () {
        return view('transaction.tts');
    })->name('transaction.tts');
    Route::get('/transaction/dmb', function () {
        return view('transaction.dmb');
    })->name('transaction.dmb');
    Route::get('/transaction/tdb', function () {
        return view('transaction.tdb');
    })->name('transaction.tdb');
    Route::get('/transaction/rit', function () {
        return view('transaction.rit');
    })->name('transaction.rit');

    // Route Report
    Route::get('/report/sdi', function () {
        return view('report.sdi');
    })->name('report.sdi');
    Route::get('/report/ckv', function () {
        return view('report.ckv');
    })->name('report.ckv');
    Route::get('/report/ilc', function () {
        return view('report.ilc');
    })->name('report.ilc');
    Route::get('/report/plc', function () {
        return view('report.plc');
    })->name('report.plc');
    Route::get('/report/bis', function () {
        return view('report.bis');
    })->name('report.bis');
    Route::get('/report/gis', function () {
        return view('report.gis');
    })->name('report.gis');
    Route::get('/report/dcl', function () {
        return view('report.dcl');
    })->name('report.dcl');
    Route::get('/report/lar', function () {
        return view('report.lar');
    })->name('report.lar');
    Route::get('/report/tdi', function () {
        return view('report.tdi');
    })->name('report.tdi');
    Route::get('/report/itc', function () {
        return view('report.itc');
    })->name('report.itc');
    Route::get('/report/csv', function () {
        return view('report.csv');
    })->name('report.csv');
    Route::get('/report/rbc', function () {
        return view('report.rbc');
    })->name('report.rbc');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    Route::get('/report/kla', function () {
        return view('report.kla');
    })->name('report.kla');
    
});
