<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\botAppointment;
use Illuminate\Validation\Rule;
use App\Rules\IsAvailable;
use Illuminate\Support\Facades\DB;


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
        $user = Auth::user();
        $relations = [
            'students' => \App\student::get(),
            'counselors' => \App\counselor::get(),
            'counselorS' => DB::table('appointments')
                ->select('*')
                ->join('counselors', 'counselors.id', '=', 'appointments.counselor_id')
                ->where('student_id', '=', $user->id)
                ->get(),

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

        $request->validate([
            'student_id' => Rule::unique('appointments', 'student_id'),
            'counselor_id' => [
                Rule::exists('counselors', 'id'), // required so the next Rule is invalid only for date
                new IsAvailable($request->input('date'))
            ]
        ], [
            'student_id.unique' => 'student already has appointment',
        ]);
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

    public function getbotAppointments()
    {
        $botAppointment = botAppointment::all();
        return view('botAppointment')->with('botAppointments', $botAppointment);
    }

    public function destroybotAppointments(botAppointment $appointment)
    {
        $appointment->delete();
        return back();
    }
}
