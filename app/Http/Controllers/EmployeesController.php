<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Departement;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employess = Employees::with('departement')->get();
        return view('employess.employ', ['employ' => $employess]);
    }
    public function tambah()
    {
        $depart = Departement::all();
        return view('employess.tambah', ['departement' => $depart]);
    }
    public function proses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'departement_id' => 'required|exists:departement,id',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'is_active' => 'required|boolean'
        ]);

        Employees::create($validated);
        return redirect('/employess');
    }
    public function edit($id)
    {
        $employee = Employees::find($id);
        $department = Departement::all();
        return view('employess.edit', ['employess' => $employee, 'departement' => $department]);
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'departement_id' => 'required|exists:departement,id',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'is_active' => 'required|boolean'
        ]);

        $employ = Employees::find($id);
        $employ->update($validated);
        return redirect('/employess');
    }

    public function hapus($id)
    {
        $depart = Employees::find($id);
        $depart->delete();
        return redirect('/employess');
    }
}
