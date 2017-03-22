<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LuckPerms\Action;
use App\Models\LuckPerms\Group;
use App\Models\LuckPerms\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowed');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function getActions()
    {
        return view('admin.actions', [
            'actions' => Action::orderBy('id', 'desc')->paginate(),
        ]);
    }

    public function getUsers()
    {
        return view('admin.users', [
            'users' => User::paginate(),
        ]);
    }

    public function getGroups()
    {
        return view('admin.groups', [
            'groups' => Group::paginate(),
        ]);
    }
}
