<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function showAttendanceForm()
    {
        return view('attendance.create');
    }
    
    public function storeAttendance(Request $request)
    {
        // バリデーション
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'clock_in' => 'required|date_format:H:i',
            'clock_out' => 'nullable|date_format:H:i|after:clock_in',
            'break_duration' => 'nullable|numeric|min:0',
            'condition' => 'nullable|string|max:255',
            'fortune' => 'nullable|string|max:255',
        ]);

        // 打刻情報の保存
        $attendance = Attendance::create([
            'employee_id' => $validatedData['employee_id'],
            'clock_in' => $validatedData['clock_in'],
            'clock_out' => $validatedData['clock_out'],
            'break_duration' => $validatedData['break_duration'],
            'condition' => $validatedData['condition'],
            'fortune' => $validatedData['fortune'],
        ]);

        return redirect()->route('attendance.show')->with('success', '打刻情報を保存しました。');
    }
}
