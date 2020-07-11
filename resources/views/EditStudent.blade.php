@extends('layouts.master')

@section('content')

<div class="row">
    <div class="offset-2 col-md-8  offset-2 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h3 class="card-title float-left">Edit Student Info</h3>
                    <div class="create float-right">
                        <a href="" class="btn btn-primary rounded-pill p-2">Back</a>
                    </div>
                </div>
                <hr>
                <div class="form">
                    <form action="{{ route('student.update', ['id'=>$student->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="roll">Roll</label>
                                <input type="text" class="form-control" id="roll" name="roll" value='{{ $student->roll }}'>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="semester">Semester</label>
                            <select id="semester" class="form-control" name="semester">
                                <option {{ $student->semesterSelect('1st Semester') }}>1st Semester</option>
                                <option  {{ $student->semesterSelect('2nd Semester') }}>2nd Semester</option>
                                <option  {{ $student->semesterSelect('3rd Semester') }}>3rd Semester</option>
                                <option  {{ $student->semesterSelect('4th Semester') }}>4th Semester</option>
                                <option  {{ $student->semesterSelect('5th Semester') }}>5th Semester</option>
                                <option  {{ $student->semesterSelect('6th Semester') }}>6th Semester</option>
                                <option  {{ $student->semesterSelect('7th Semester') }}>7th Semester</option>
                                <option  {{ $student->semesterSelect('8th Semester') }}>8th Semester</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="shift">Shift</label>
                            <select id="shift" class="form-control" name="shift">
                                <option  {{ $student->shiftSelect('1st Shift') }}>1st Shift</option>
                                <option  {{ $student->shiftSelect('1st Shift') }}>2nd Shift</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
