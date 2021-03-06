<?php

namespace App\Http\Controllers;

use App\counselor;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use Image;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudent()
    {
        return view('users.Sprofile')->with('user', Auth::user());
    }
    public function indexCounselor()
    {
        return view('users.Cprofile')->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function updateStudent(Request $request)
    {
        $this->validate($request, []);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->matric = $request->matric;
        $user->faculty = $request->faculty;
        $user->department = $request->department;
        $user->year = $request->year;
        $user->nationality = $request->nationality;
        $user->contact = $request->contact;
        $user->about = $request->about;

        $user->save();


        // if ($request->has('password')) {
        //     $user->password = bcrypt($request->password);
        // }
        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }


        Session::flash('success', 'Account profile updated.');

        return redirect('/student/profile');
    }

    public function updateCounselor(Request $request)
    {
        $this->validate($request, []);

        $user = Auth::user();

        $filename = 'empty';
        if ($request->hasfile('resume')) {
            $filename = $request->file('resume')->store('/', 'pdf');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->about = $request->about;
        $user->resume = $filename;





        // if ($request->has('password')) {
        //     $user->password = bcrypt($request->password);
        // }

        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $user->save();

        Session::flash('success', 'Account profile updated.');

        return redirect('/counselor/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //view messages
    public function getCprofiles(Counselor $counselor)
    {


        $user = Auth::user();
        $relations = [
            'viewCprofile' => counselor::all(),
            'reviews' => DB::table('counselor_reviews')
                ->select('*')


                ->get()

        ];




        return view('viewCprofile', $relations);
    }



    public function status(Request $request, $id)
    {

        $data = counselor::find($id);

        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->save();
        Session::flash('success', $data->name . '  Status has been changed successfully');

        return redirect('approval');
    }
    public function pdf($id)
    {
        $filename = counselor::find($id)->resume;
        return Storage::disk('pdf')->download($filename);
    }



    //approval controller
    public function index()
    {


        $counselors = counselor::get();
        return view('approval', ['counselors' => $counselors]);
    }

    public function approvalDestroy(Counselor $counselor)
    {
        $counselor->delete();

        return back();
    }

    //questionnaire
    public function updateD(Request $request)
    {
        $user = $request->user();

        $user->update($request->only([
            'quest_result_text'
        ]));

        return view('student', compact('user'));
    }
}
