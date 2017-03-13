@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Actions</div>

                <div class="panel-body">
                    @if(count($actions) > 0)
                        <table class="table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Actor Name</th>
                                    <th>Action Type</th>
                                    <th>Acted UUID</th>
                                    <th>Acted Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($actions as $action)
                                <tr>
                                    <td>{{ $action->time }}</td>
                                    <td>{{ $action->actor_name }}</td>
                                    <td>{{ $action->type }}</td>
                                    <td>{{ $action->acted_uuid }}</td>
                                    <td>{{ $action->acted_name }}</td>
                                    <td>{{ $action->action }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        

                        {{ $actions->links() }}
                    @else
                        <h4>No actions have been recorded.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection