<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Upload;
use App\Models\LoginAth;
use App\Models\RegisAth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadFotoController;


class DashboardController extends Controller
{
    public function index() {
        return view ('layouts.dashboard');
    }



}
