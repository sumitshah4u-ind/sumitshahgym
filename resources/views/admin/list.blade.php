@extends('template.app')

@section('title', 'Add a Member')

@section('content')

  <table class="table table-hover">
      <thead>
        <tr>
          <th><b>First Name</b></th>
          <th><b>Last Name</b></th>
          <th><b>Email</b></th>
          <th><b>Subscription</b></th>
          <th><b>View Member?</b></th>
          <th><b>Edit Member?</b></th>
        </tr>
      </thead>
      <tbody>

@foreach ($members as $member)
      <tr>
        <td>{{ $member->firstName }}</td>
        <td>{{ $member->lastName }}</td>
        <td>{{ $member->email }}</td>
        <td>@if($member->subscription == 'M') Monthly @else Yearly @endif</td>
        <td><a href="{{ url('/members\/').$member->id }}" class="btn btn-link" role="button">View Member</a></td>
        <td><a href="{{ url('/members\/').$member->id }}/edit" class="btn btn-link" role="button">Edit Member</a></td>
      </tr>

@endforeach

</tbody>
</table>

@endsection
