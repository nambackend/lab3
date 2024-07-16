<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->join('categories','categories.id', '=','books.category_id')
        ->select('books.*','categories.name as categoryName')
        ->get();
        return view('book-list', compact('books'));
    }
    // hiển thị form add
    public function add()
    {
        $categories = DB::table('categories')->get();
        return view('add', compact('categories'));
    }
    // Thêm mới book
    public function create(Request $request)
    {
        $books = $request->all();
        DB::table('books')->insert([
            'title' => $books['title'],
            'thumbnail' => $books['thumbnail'],
            'author' => $books['author'],
            'publisher' => $books['publisher'],
            'publication' => $books['publication'],
            'price' => $books['price'],
            'quantity' => $books['quantity'],
            'category_id' => $books['category_id'],
        ]);
        return redirect()->route('index');
        // $books2 = $request->all();
        // DB::table('books')->insert([
        //     'title' => $books2['title'],
        //     'thumbnail' => $books2['thumbnail'],
        //     'author' => $books2['author'],
        //     'publisher' => $books2['publisher'],
        //     'publication' => $books2['publication'],
        //     'price' => $books2['price'],
        //     'quantity' => $books2['quantity'],
        //     'category_id' => $books2['category_id'],
        // ]);
        // return redirect()->route('index');
    }
    // xóa book
    public function delete($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return back();
    }
    // hiển thị form edit
    public function editform($id)
    {
        $editbook = DB::table('books')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        return view('edit', compact('editbook', 'categories'));
    }
    // cập nhật dữ liệu 
    public function edit(Request $request){
        // $books = $request->all();
        // DB::table('books')->update([
        //     'title' => $books['title'],
        //     'thumbnail' => $books['thumbnail'],
        //     'author' => $books['author'],
        //     'publisher' => $books['publisher'],
        //     'publication' => $books['publication'],
        //     'price' => $books['price'],
        //     'quantity' => $books['quantity'],
        //     'category_id' => $books['category_id'],
        // ]);
        // return view('book-list', compact('books'));
        $editbook =[
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        DB::table('books')->where('id', $request['id'])->update($editbook);
        return redirect()->route('index');
    }
} 
