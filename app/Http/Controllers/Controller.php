<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $Pembelian;
    public function __construct(Pembelian $Pembelian)
    {
        $this->Pembelian = $Pembelian;
    }
    public function index()
    {
        $title = 'Beranda';
        return view('index', compact('title'));
    }
    public function dashboard()
    {
        $title = 'Dashboard';
        $bulan = Carbon::now()->format('F');
        $tableAdmin = $this->Pembelian->TakeAdmin();
        $userId = Auth::user()->id;
        $tableUser = $this->Pembelian->TakeUser($userId);
        return view('dashboard.index', compact('title', 'bulan', 'tableAdmin', 'tableUser'));
    }
}
