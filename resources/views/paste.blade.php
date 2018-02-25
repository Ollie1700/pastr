@extends('layout')

@section('content')

    <div class="paste-id">
        <small>Paste ID {{ $paste->slug }} created at {{ $paste->created_at }}</small>
    </div>

    <div class="paste-links">
        <a href="{{ url($paste->slug) }}">Permalink</a>
        <a href="{{ url($paste->slug . '/raw') }}">Raw</a>
    </div>

    <pre class="paste">{{ $paste->paste }}</pre>

@endsection
