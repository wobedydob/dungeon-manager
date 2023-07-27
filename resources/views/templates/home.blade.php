@extends('base')

<h1>Dungeon Manager</h1>
<p>Compendium of Creation</p>

@section('content')
    @guest
        <!-- Content for guests (non-authenticated users) -->
        <p>Welcome to the Dungeon Manager!</p>
    @else
        <!-- Content for authenticated users -->
        <p>Hello, {{ Auth::user()->name }}! Welcome back to the Dungeon Manager.</p>
        <!-- Add any other content for authenticated users -->
    @endguest
@endsection
