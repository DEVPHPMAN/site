<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
        {
            $data = [
                'title' => 'Гостевая книга на Laravel 5.1!',
                'pagetitle' => 'Гостевая книга'
            ];
            return view('pages.messages.index', $data);
        }
        
        public function edit($id)
        {
            //dd($id);
            $data = [
                'title' => 'Редактирование: Гостевая книга на Laravel 5.1!',
                'pagetitle' => 'Редактирование: Гостевая книга'
            ];
            return view('pages.messages.edit', $data);
        }
}
