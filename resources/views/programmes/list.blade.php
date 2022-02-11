@extends('layout.master')

@section('page_title', 'List of programmes')

@section('content')
<form class="d-flex" method="GET" action="{{route('showAllProgrammes')}}" >
          <input
          class="form-control me-2"
          type="search"
          name="search"
          placeholder="Type programme name or ID to search"
          aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
              Search
          </button>
</form>
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
{{$programmes->links()}}
@endsection
