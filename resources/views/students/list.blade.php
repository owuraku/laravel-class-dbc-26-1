@extends('layout.master')

@section('page_title', 'List of Students')

@section('content')
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Age</th>
      <th scope="col">Registered Programme</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($students as $student)
      <tr>
        <th scope="row">{{$student->fullname}}</th>
        <td>{{$student->student_id}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->registeredProgramme->name}}</td>
        <td>
            <td>
            <a type="button"
            href="{{route('showEditStudentPage', ['id' => $student->id])}}"
            class="btn btn-primary">Edit</a>
            <a type="button"
            href="{{route('showStudentDetails', ['id' => $student->id])}}"
            class="btn btn-secondary">View</a>

            <button type="button"
            onclick="openModal('{{$student->firstname}}', '{{$student->id}}')"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#deleteCourseModal">Delete</button>
        </td>
        </td>
      </tr>

      @endforeach
  </tbody>
</table>
@endsection
