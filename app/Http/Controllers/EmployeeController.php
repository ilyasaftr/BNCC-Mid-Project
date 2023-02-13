<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function view()
    {
        return view('view');
    }

    public function add()
    {
        return view('add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEmployee(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|integer|min:20',
            'Alamat' => 'required|string|min:10|max:40',
            'NomorTelp' => 'required|regex:[^08]|string|min:9|max:12',
        ]);
        Employee::create([
            'name' => $request->Nama,
            'age' => $request->Umur,
            'address' => $request->Alamat,
            'phoneNumber' => $request->NomorTelp,
        ]);
        return redirect(route('getEmployee'));
    }

    public function getEmployee(){
        $employees = Employee::all();
        return view('view', ['employees' => $employees]);
    }

    public function updateEmployee(Request $request, $id) {
        $employee = Employee::find($id);

        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|integer|min:20',
            'Alamat' => 'required|string|min:10|max:40',
            'NomorTelp' => 'required|regex:[^08]|string|min:9|max:12',
        ]);

        $employee -> update([
            'name' => $request->Nama,
            'age' => $request->Umur,
            'address' => $request->Alamat,
            'phoneNumber' => $request->NomorTelp,
        ]);


        return redirect(route('getEmployee'));
    }


    public function getEmployeeById($id) {
        $employee = Employee::find($id);
        return view('edit', ['employee' => $employee]);
    }



    public function deleteEmployee($id){
        Employee::destroy($id);
        return redirect(route('getEmployee'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */

    public function destroy(employee $employee)
    {
        //
    }
}
