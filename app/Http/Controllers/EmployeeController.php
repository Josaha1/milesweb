<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->get();

        dump($employees);
    }
    public function employeeList()
    {
        $employees = Employee::all();

        return view('employees', compact('employees'));
    }
    public function create()
    {
        return view('create_employees');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|unique:employees,email',
            'gender'   => 'required|in:male,female,other',
            'tel'      => 'required|string|max:20',
            'age'      => 'required|integer|min:18|max:100',
            'address'  => 'nullable|string',
            'avatar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'fullname.required' => 'กรุณากรอกชื่อ - นามสกุล',
            'email.required'    => 'กรุณากรอกอีเมล',
            'email.email'       => 'รูปแบบอีเมลไม่ถูกต้อง',
            'email.unique'      => 'อีเมลนี้มีอยู่ในระบบแล้ว',
            'tel.required'      => 'กรุณากรอกเบอร์โทรศัพท์',
            'age.required'      => 'กรุณากรอกอายุ',
            'age.integer'       => 'กรุณากรอกเป็นตัวเลขเท่านั้น',
            'age.min'           => 'อายุต้องมากกว่า 18 ปี',
            'age.max'           => 'อายุต้องน้อยกว่า 100 ปี',
            'avatar.image'      => 'ไฟล์ที่อัปโหลดต้องเป็นรูปภาพเท่านั้น',
            'gender.required'   => 'กรุณาเลือกเพศ',
            'address.string'    => 'กรุณากรอกที่อยู่',
            'avatar.required'   => 'กรุณาเลือกไฟล์รูปภาพ',
            'avatar.mimes'      => 'ไฟล์ที่อัปโหลดต้องเป็นรูปภาพเท่านั้น',
            'avatar.max'        => 'ไฟล์ที่อัปโหลดต้องมีขนาดไม่เกิน 2 MB',
        ]
        );

        try {
            $avatarPath = null;

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
            }

            // Create new employee
            $employee           = new Employee();
            $employee->fullname = $request->fullname;
            $employee->email    = $request->email;
            $employee->tel      = $request->tel;
            $employee->age      = $request->age;
            $employee->gender   = $request->gender;
            $employee->address  = $request->address;
            $employee->avatar   = $avatarPath;
            $employee->save();

            return redirect()->route('employees.employeeList')
                ->with('success', 'สร้างพนักงานสำเร็จ');

        } catch (\Exception $e) {
            Log::error('Error creating employee: ' . $e->getMessage());
            return back()->with('error', 'เกิดข้อผิดพลาดในการสร้างพนักงาน');
        }

    }
}
