<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LuckPerms\Action;
use App\Models\LuckPerms\Group;
use App\Models\LuckPerms\GroupPermission;
use Illuminate\Http\Request;

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
            'groupName'   => $name,
            'permissions' => GroupPermission::where('name', $name)->paginate(),
        ]);
    }

    public function postAdd($name, Request $request)
    {
        $permission = new GroupPermission([
            'name'       => $name,
            'permission' => $request->permissionInput,
            'value'      => ($request->permissionValue == 'true') ? true : false,
            'server'     => $request->serverInput,
            'world'      => $request->worldInput,
            'expiry'     => 0,
            'contexts'   => '{}',
        ]);

        $permission->save();

        Action::log($name, 'permisison set '.$permission->permission.' '.(($request->permissionValue == 'true') ? 'true' : 'false').' '.$permission->server.' '.$permission->world);

        return redirect()->back();
    }

    public function makeEdit($name, Request $request)
    {
        if (!$request->has('id') || !$request->has('newPermission')) {
            abort(404);
        }

        $permission = GroupPermission::findOrFail($request->id);
        $permission->permission = $request->newPermission;
        $permission->save();
    }

    public function deletePermission($name)
    {
    }
}
