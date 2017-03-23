@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                    @if(count($groups) > 0)
                    <div class="row">
                        @foreach($groups as $group)
                        <div class="col-md-4">
                            <div class="callout callout-primary">
                                <h3>
                                    {{ $group->name }}
                                </h3>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin::group::permissions::getPermissions', ['name' => $group->name]) }}" class="btn btn-primary btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Perms</a> 
                                    </div>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin::group::permissions::getPermissions', ['name' => $group->name]) }}" class="btn btn-primary btn-xs" disabled="disabled"><i class="fa fa-info" aria-hidden="true"></i> Meta</a> 
                                    </div>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin::group::permissions::getPermissions', ['name' => $group->name]) }}" class="btn btn-danger btn-xs" disabled="disabled"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a> 
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                        {{ $groups->links() }}
                    </div>
                    @else
                        <h4>No groups have been created.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection