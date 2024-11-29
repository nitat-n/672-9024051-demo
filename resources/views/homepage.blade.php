@extends('layouts.app')

@section('title')
ebd-d02-Home    
@endsection

@section('banner')
<h1 class="text-6xl font-extrabold text-red-500 text-center">EBD-W02-Home</h1>
@endsection

@section('content')
<h2>Announcement</h2>
<h2>Bio</h2>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur sint alias aspernatur provident fugiat dignissimos maiores magni earum placeat blanditiis illum error quo dolor temporibus tempore laboriosam nulla, possimus itaque.</p>
<a href="{{ url('/bio')}}">Bio</a>
<h2>Assignment</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, tempore illum suscipit ut dicta accusantium tenetur. Earum veritatis doloremque quia, eaque rerum aspernatur itaque atque esse quaerat maxime. Corporis, magni.</p>
<img src="{{ url('/images/historyrbru1.jpg')}}" alt="test">
<a href="{{ url('/assignment')}}" class="btn btn-primary">Assignment</a>
@endsection

@section('footer')
<address>IT CSIT RBRU</address>
@endsection