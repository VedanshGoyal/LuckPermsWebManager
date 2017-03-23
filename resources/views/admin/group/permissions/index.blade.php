@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Add Permission</div>

                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin::group::permissions::postAdd', ['name' => $groupName]) }}">
                        {{ method_field('POST') }}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="permissionInput">Permission</label>
                                    <input type="text" class="form-control" id="permissionInput" name="permissionInput" placeholder="permission.node" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="permissionValue">Permission Value</label>
                                    <select class="form-control" id="permissionValue" name="permissionValue" required>
                                        <option value="true">True/Allow/Give</option>
                                        <option value="false">False/Reject/Negate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="serverInput">Server</label>
                                    <input type="text" class="form-control" id="serverInput" name="serverInput" placeholder="server" value="global" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="worldInput">World</label>
                                    <input type="text" class="form-control" id="worldInput" name="worldInput" placeholder="server" value="global" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Add Permission</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Group Permissions</div>

                <div class="panel-body">
                    @if(count($permissions) > 0)
                        <table class="table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Permission</th>
                                    <th>Allowed</th>
                                    <th>Server</th>
                                    <th>World</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->permission }}</td>
                                    <td>{{ $permission->value ? 'True' : 'False' }}</td>
                                    <td>{{ $permission->server }}</td>
                                    <td>{{ $permission->world }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        

                        {{ $permissions->links() }}
                    @else
                        <h4>No permissions have been added.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
