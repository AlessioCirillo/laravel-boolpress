@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>
    
    @if ($posts->isEmpty())
        <p>No posts</p>
    @else
        <p>posts</p>
    @endif

</div>
@endsection