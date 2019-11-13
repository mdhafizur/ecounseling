<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\student;
use App\counselor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    //student register
    public function showStudentRegisterForm()
    {
        return view('auth.studentRegister', ['url' => 'student']);
    }

    protected function createStudent(Request $request)
    {
        $this->validator($request->all())->validate();
        student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'matric' => $request['matric'],
            'faculty' => $request['faculty'],
            'department' => $request['department'],
            'year' => $request['year'],
            'nationality' => $request['nationality'],
            'contact' => $request['contact'],
        ]);
        Session::flash('success', 'Sign Up Successful');
        return redirect()->intended('login/student');
    }



    //counselor register

    public function showCounselorRegisterForm()
    {
        return view('auth.counselorRegister', ['url' => 'counselor']);
    }

    protected function createCounselor(Request $request)
    {
        $this->validator($request->all())->validate();
        counselor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'status' => false,
            'type' => implode(",", $request['type']),





        ]);
        if ($request->hasfile('resume')) {
            $filename = $request->resume->getClientOriginalName;
            $request->file->storeAs('public/pdf', $filename);
            'resume'->$filename;

            counselor::save();
        }

        Session::flash('success', 'Sign Up Successful');
        return redirect()->intended('login/counselor');
    }
}
