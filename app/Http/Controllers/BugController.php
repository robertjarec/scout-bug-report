<?php

namespace App\Http\Controllers;

use App\Models\User;

class BugController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function results()
    {
        $result = User::search()
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view('bug', [
            'result' => $result,
        ]);
    }
}
