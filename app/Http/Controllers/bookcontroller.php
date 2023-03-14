<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class bookcontroller extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
       
        return view('Home', compact('bookCount'));
    }
    
    
    public function about()
    {
        return view('About');
    }

    public function Contact()
    {
        return view('Contact');
    } 
    public function view()
    {
         $books = Book::select('id','title', 'edition', 'author', 'no_of_pages')->get();
        return view('view', compact('books'));
    }
    public function del($id)
    {
         $books = book::find($id);
         if(!is_null($books))
         {
            $books->delete();    
         }
         return redirect()->back()->with('success', 'Book deleted successfully');
    }
    public function edit($id)
    {
      $books = Book::find($id);
      return view('store', compact('books'));
    }
    public function update($id,Request $request)
    {
        $books = book::find($id);
        $books->Title = $request['title'];
        $books->Author = $request['author'];
        $books->Edition = $request['edition'];
        $books->No_of_Pages = $request['num_pages'];
        $books->save();
    
        return redirect()->back()->with('success', 'Book added successfully!');
    }
    public function store()
    {
        return view('Store');
    }
    public function storebook(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'author' => 'required',
        'edition' => 'required',
        'num_pages' => 'required|integer'
    ]);

    $books = new book;
    $books->Title = $validatedData['title'];
    $books->Author = $validatedData['author'];
    $books->Edition = $validatedData['edition'];
    $books->No_of_Pages = $validatedData['num_pages'];
    $books->save();

    return redirect()->back()->with('success', 'Book added successfully!');
}

}
