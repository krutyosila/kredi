@extends('layout.app')
@section('content')
    <div class="rounded overflow-hidden bg-new">
        <div class="p-4">
            <h1>{{ $bank->name }}</h1>
            <p>{{ $bank->description }}</p>
            <hr>
            {!! $bank->detail !!}
        </div>
    </div>
@endsection
