<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LuckPerms\Group;
use App\Models\LuckPerms\GroupPermission;

class GroupController extends Controller
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

    public function getPermissions($name)
    {
        return view('admin.group.permissions.index', [
            'permissions' => GroupPermission::where('name', $name)->paginate(),
        ]);
    }

    public function getAdd($name)
    {
    }

    public function postAdd($name)
    {
    }

    public function getEdit($name)
    {
    }

    public function makeEdit($name)
    {
    }

    public function deletePermission($name)
    {
    }
}
