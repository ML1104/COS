@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table-bordered text-center">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Contact Email</th>
                        </tr>
                        @if($jobs)
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->description }}</td>
                                    <td>{{ $job->email }}</td>
                                </tr>
                            @endforeach

                        @else

                        <div>Nothing Here</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
