@extends('layout.master')

@section('page_title', 'Add A Student')

@section('content')

@if($edit)
   <h3>Edit Student: {{$student->fullname}}</h3>
@else
    <h3>Register New Student</h3>
@endif

<form action="{{route('saveStudent')}}" method="POST">
    @csrf
    @if($edit)
    <input type="hidden" name="id" value="{{$student->id}}">
    @method('PUT')
    @endif
    {{-- firstname --}}
  <div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" required
    minlength="10" maxlength="100"
    class="form-control @error('firstname') is-invalid @enderror"
    name="name"
    value="{{old('firstname') ? old('firstname') : $student->firstname}}" >
    @error('firstname')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  {{-- lastname --}}
  <div class="mb-3">
    <label for="lastname" class="form-label">Surname</label>
    <input type="text" required
    minlength="10" maxlength="100"
    class="form-control @error('lastname') is-invalid @enderror"
    name="name"
    value="{{old('lastname') ? old('lastname') : $student->lastname}}" >
    @error('lastname')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>


  {{-- student ID --}}
  <div class="mb-3">
    <label for="student_id" class="form-label">Student ID</label>
    <input type="text" required
    maxlength="20"
    class="form-control @error('student_id') is-invalid @enderror"
    name="name"
    value="{{old('student_id') ? old('student_id') : $student->student_id}}" >
    @error('student_id')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  {{-- gender --}}
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select name="gender" class="form-select  @error('gender') is-invalid @enderror" required aria-label="Select gender">
        <option>Select gender</option>
        <option value="male"   @if($student->gender == 'male') selected @endif>Male</option>
        <option value="female"  @if($student->gender == 'female') selected @endif>Female</option>
        <option value="other"  @if($student->gender == 'other') selected @endif>Other</option>
</select>
    @error('gender')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

   <div class="mb-3">
    <label for="date_of_birth" class="form-label">Date of birth</label>
    <input type="date" required
    class="form-control @error('date_of_birth') is-invalid @enderror"
    name="date_of_birth"
    value="{{old('date_of_birth') ? old('date_of_birth') : $student->date_of_birth}}" >
    @error('date_of_birth')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="text" required pattern="[0-9]*"
    class="form-control @error('contact') is-invalid @enderror"
    name="contact"
    value="{{old('contact') ? old('contact') : $student->contact}}" >
    @error('contact')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>


<div class="mb-3">
    <label class="form-label" for="programme_id">Select Programme</label>

    <select class="form-select" name="programme_id" aria-label="Default select example">
        <option selected>Choose One Programme</option>
        @foreach ($programmes as $programme)
    <option value="{{$programme->id}}"
         @if($student->registeredProgramme == $programme) selected @endif
        >
         {{$programme->name}} ({{$programme->programme_id}})
    </option>
@endforeach

</select>
</div>

  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
@endsection
