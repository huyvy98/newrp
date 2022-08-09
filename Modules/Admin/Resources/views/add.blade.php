@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="firstname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lastname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" name="address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="text" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@endsection
