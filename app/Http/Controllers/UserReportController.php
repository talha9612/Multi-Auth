<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserReportController extends Controller
{
    /**
     * Display the user report.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all(); // Fetch all users. Adjust this as needed.
        return view('admin.user_report', compact('users'));
    }
}
