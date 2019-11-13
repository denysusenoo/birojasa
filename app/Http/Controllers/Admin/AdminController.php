<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Dashboard
    public function index() {
        return view('admin.dashboard');
    }

    // Bookings
    public function bookings() {
        return view('admin.booking.index');
    }

    // Customers
    public function users() {
        return view('admin.user.index');
    }

    // Reports
    public function reports() {
        return view('admin.report.index');
    }
}
