@extends('layout')

@section('content')

    <form action="{{ url('/new') }}" method="post">
        {{ csrf_field() }}

        <textarea id="paste-area" name="paste" placeholder="Paste something!"></textarea>

        <button id="paste-submit" type="submit" name="submit">Create</button>
    </form>

@endsection
