<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Session;
use Auth;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'students' => \App\student::get(),
            'counselors' => \App\counselor::get(),

        ];

        return view('createAppointment', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $appointment = new Appointment;

        $appointment->student_id = $user->id;
        $appointment->counselor_id = $request->counselor_id;
        $appointment->date = $request->date;

        $appointment->comments = $request->comments;
        $appointment->save();
        Session::flash('success', 'Appointment Successful');

        return redirect('/createAppointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function appointedStudents()
    {
        $user = Auth::user();

        $appointments = Appointment::query()
            ->with(['student']) // eager load appointment's student
            ->where('counselor_id', $user->id) // filter by current user
            ->whereHas('student') // only appointments with students
            ->get();

        return view('appointedStudents')->with('appointments', $appointments);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return back();
    }
}
