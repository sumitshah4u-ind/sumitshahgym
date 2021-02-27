@extends('template.app')

@section('title', 'Add a Member')

@section('content')


<p><b>First Name:</b> {{ $member->firstName }}</p>
<p><b>Last Name:</b> {{ $member->lastName }}</p>
<p><b>Email:</b> {{ $member->email }}</p>
<p><b>Address:</b> {{ $member->address1 }}, {{ $member->address2 }}, {{ $member->postcode }}</p>
<p><b>DOB:</b> {{ $member->DOB }}</p>
<p><b>Phone:</b> {{ $member->phone }}</p>
<p><b>Subscription:</b> @if($member->subscription == 'M') Monthly @else Yearly @endif</p>

<a href="{{ url('/members\/').$member->id }}/edit" class="btn btn-link" role="button">Edit {{$member->firstName.' '.$member->lastName}}</a>

@endsection
