@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>Create New Job Offer</h1>
            <div class="col-md-8"></div>
            <form action="/jobs" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="description">Job Description</label>
                    <textarea class="form-control" id="description" name="description" cols="100" rows="8" required></textarea>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="on" required>
                </div>

                <div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
