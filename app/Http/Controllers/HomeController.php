<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //use DB;


class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function login(){
        return view('pages.login');
    }
    public function employees(){
       
        //---------------------------------------READ-----------------------------------------
        //All Query Form DB
        $employees = DB::table('employees')->get(); //SELECT * FROM employees
        
        //A One Of Record From DB
        //$employees = DB::table('employees')->first(); //SELECT * FROM employees limit 1

        //Select a Record From DB
        //$employees = DB::table('employees')->first(['fullname','gender', 'email']); //SELECT fullname, gender, email FROM employees 

        //Select a Record From DB if-else (where();) 
        //$employees = DB::table('employees')->where('id','>=',2)->get(['fullname', 'email']); //SELECT fullname, gender, email FROM employees 

        //Many if-else *AND OR
        // $employees = DB::table('employees')
        //     ->where('id',2)
        //     ->where('status', 1)
        //     ->where('age', 18) // ->orwhere('age', 18)
        //     ->first();

        //Find with id
        //$employees = DB::table('employees')->find(1); //SELECT * FROM employees where id='3'

        //Count
        //$employees = DB::table('employees')->count();

        //Max Min average
        // $employees = DB::table('employees')->max('age');
        // $employees = DB::table('employees')->min('age');
        // $employees = DB::table('employees')->average('age');

        //Sort Order by limit()
        // $employees = DB::table('employees')->orderBy('age')->get(); //Min -> Max
        // $employees = DB::table('employees')->orderByDesc('age')->get(); //Max -> Min
        // $employees = DB::table('employees')->orderBy('age')->limit(2)->get();

        //--------------------------------------------------INSERT&UPDATE--------------------------------------
        $data = array(
            
            'email' => 'bbb',
            'tel' => 'bbb'
            
        );
        //Insert -------- 1.
        //$employees = DB::table('employees')->insert($data);


        //Update -------- 2.
        //$employees = DB::table('employees')->where('id',4)->update($data);


        //-------------------------------------------------DELETE------------------------------------------
        //$employees = DB::table('employees')->where('id',4)->delete();



        return $employees;
    }

    // Eloquence 
    public function employeelist(){
        //$employees = Employee::all();

        // $employees = Employee::all(['id','fullname']);

        //$employees = Employee::first(['id','fullname']);

        //$employees = Employee::where('id',2)->get();
    
        $employees = Employee::where('age','>=',19)->get();

        return $employees ;
    }
}

