<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        // $users = Contact::orderBy('name')->get(); сортировка по имени

        $users = Contact::all(); // вывод всех записей

        return view('home', compact('users'));
    }

    public function search(Request $request) // Поиск по имени
    {
        $s = $request->s;
        $users = Contact::where('name', 'LIKE', "%{$s}%")->orderBy('name')->get();
        return view('home', compact('users'));
    }
}
