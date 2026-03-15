<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Admins;
use App\Models\backend\FAQs;
use App\Models\backend\Team;

class AdminHomeController extends Controller
{

    public function index()
    {
        if(session()->has('email')){
            $Name = session('first_name') . " " . session('last_name');
            $TotalAdmins = Admins::count();
            $TotalTeam = Team::count();
            $TotalFAQs = FAQs::count();
            return view('backend.index', compact('Name','TotalAdmins', 'TotalTeam', 'TotalFAQs'));

        } else {
            return view('backend.login');
        }
    }

    public function registerAdmin()
    {
        $Name = session('first_name') . " " . session('last_name');
        $url = url('/admin/register');
        $data = compact('url', 'Name');
        return view('backend.admin-add')->with($data);
    }

    public function submitAdminRecord(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'contact' => 'required'
            ]
        );
        $admin = new Admins();
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->contact = $request['contact'];
        $admin->password = md5($request['password']);
        $admin->status = 1;
        $admin->save();
        return redirect('/admin/admins-list');
    }

    public function showAdminRecord()
    {
        $admins = Admins::all();
        $Name = session('first_name') . " " . session('last_name');
        $data = compact('admins', 'Name');
        return view('backend/admins-list')->with($data);
    }

    public function deleteAdminRecord(string $id)
    {
        $data  = Admins::find($id);
        if (!is_null($data)) {
            $data->delete();
        }
        $data = compact('admins');
        return view('backend/admins-list')->with($data);
    }

    public function editAdminRecord($id)
    {
        $Name = session('first_name') . " " . session('last_name');
        $data  = Admins::find($id);
        if (is_null($data)) {
            return view('backend.admins-list');
        } else {
            $url = url('/admin/update') . "/" . $id;
            $data = compact('admins', 'url', 'Name');
            return view('backend.admin-add')->with($data);
        }
    }
}
