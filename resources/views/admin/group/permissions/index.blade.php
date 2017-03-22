@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
