<?php

use App\Http\Controllers\Admin\BookController;
use Illuminate\Support\Facades\DB;
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

// Route mặc định khi truy cập trang chủ
Route::get('/', function () {
    return view('welcome');
});
Route::get('/book-list', function () {
    $books = DB::table('books')
        ->select('books.*', 'categories.name as categoryName')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->orderBy('price', 'asc')
        ->limit(8)
        ->get();

    $books2 = DB::table('books')
        ->select('books.*', 'categories.name')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->orderBy('price', 'desc')
        ->limit(8)
        ->get();

    return view(
        'book-list',
        compact('books', 'books2')
    );

});

Route::get('/categories/{category_id}', function ($category_id) {
    // Lấy danh sách sách theo loại sách
    $books = DB::table('books')
        ->where('category_id', $category_id)
        ->get();

    return view('books.category', [
        'books' => $books,
    ]);
});
Route::get('/book/{id}', function ($id) {
    $bookDetail = DB::table('books')->find($id);
    return view(
        'bookDetail',
        compact('bookDetail')
    );
});

Route::get('BookCategory/{id}', function ($id) {
    $bookCate = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->orderBy('price', 'desc')
        ->where('category_id', $id)
        ->get();
    return view(
        'BookCategory',
        compact('bookCate')
    );
});
Route::get('/', [BookController::class,'index'])->name('index');
Route::get('/add', [BookController::class,'add'])->name('add');
Route::post('/create', [BookController::class,'create'])->name('create');
Route::get('/delete/{id}', [BookController::class,'delete'])->name('delete');
Route::get('/editform/{id}', [BookController::class,'editform'])->name('editform');
Route::put('/edit/{id}', [BookController::class,'edit'])->name('edit');