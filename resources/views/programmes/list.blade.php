@extends('layout.master')

@section('page_title', 'List of programmes')

@section('content')
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Programme Name</th>
      <th scope="col">Programme ID</th>
      <th scope="col">Duration</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($programmes as $programme)
      <tr>
        <th scope="row">{{$programme->name}}</th>
        <td>{{$programme->programme_id}}</td>
        <td>{{$programme->duration}} day(s)</td>
      </tr>

      @endforeach
  </tbody>
</table>
@endsection
