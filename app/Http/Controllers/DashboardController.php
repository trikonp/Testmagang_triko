<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Departement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employees::count();
        $totalDepartments = Departement::count();
        $activeEmployees = Employees::where('is_active', true)->count();
        $inactiveEmployees = Employees::where('is_active', false)->count();
        $maleEmployees = Employees::where('gender', 'L')->count();
        $femaleEmployees = Employees::where('gender', 'P')->count();

        return view('dashboard', [
            'totalEmployees' => $totalEmployees,
            'totalDepartments' => $totalDepartments,
            'activeEmployees' => $activeEmployees,
            'inactiveEmployees' => $inactiveEmployees,
            'maleEmployees' => $maleEmployees,
            'femaleEmployees' => $femaleEmployees,
        ]);
    }
}
