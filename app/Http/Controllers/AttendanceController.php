<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('role_id') == 3) {
            abort(404);
        }
        $users = User::all();
        return view('admin.attendance.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session('role_id') == 3) {
            abort(404);
        }
        $request->validate([
            'user_id' => 'required',
            'present_at' => 'required',
            'description' => 'required',
        ]);

        Attendance::create([
            'user_id' => $request->user_id,
            'present_at' => $request->present_at,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('attendance')->with('message', 'New attendance has been added!');
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
        if (session('role_id') == 3) {
            abort(404);
        }
        $users = User::all();
        $attendance = Attendance::find($id);
        return view('admin.attendance.edit', compact('attendance', 'users'));
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
        if (session('role_id') == 3) {
            abort(404);
        }
        $request->validate([
            'user_id' => 'required',
            'present_at' => 'required',
            'description' => 'required',
        ]);

        $user = User::find($request->user_id);

        Attendance::where('id', $id)->update([
            'user_id' => $request->user_id,
            'present_at' => $request->present_at,
            'description' => $request->description,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('attendance')->with('message', 'Attendance from <strong>' . $user->name . '</strong> has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session('role_id') == 3) {
            abort(404);
        }
        $attendance = Attendance::find($id);
        $user = User::find($attendance->user_id);
        Attendance::where('id', $id)->delete();
        return redirect('attendance')->with('message', 'Attendance from <strong>' . $user->name . '</strong> has been deleted!');
    }
}
