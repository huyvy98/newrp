@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
    @foreach($users as $user)
        @if(!empty($user->firstname))
            <li>{{$user->firstname}}</li>
            <li>{{$user->lastname}}</li>
            <li>{{$user->address}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->phone}}</li>
            <li>{{$user->image}}</li>

        @endif
    @endforeach

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@endsection
