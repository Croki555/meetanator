<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return view('meeting.index');
    }

    public function manageLeader(string $id = '')
    {
        if($id != '0f55ce4e9577f0dd5302132b17705471') {
            abort(404);
        }
        return view('manage.leader', [
            'secretLink'=> route('home') . '/manage-meeting-leader/' . $id,
            'invateLink'
        ]);
    }

    public function manageUser(string $id = '')
    {
        return view('manage.user');
    }
}
