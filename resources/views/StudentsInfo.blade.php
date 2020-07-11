@extends('layouts.master')

@section('content')

<div class="row">
    <div class="offset-2 col-md-8  offset-2 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h3 class="card-title float-left">Student Info</h3>
                    <div class="create float-right">
                        <a href="#" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#create">Crate
                            New Student</a>
                    </div>
                </div>
                <hr>
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                            <th>{{$student->id}}</th>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->semester}}</td>
                                <td>{{$student->shift}}</td>
                                <td>
                                    <span><a href="{{ route('student.edit', ['id'=>$student->id]) }}">Edit</a></span>
                                    <span>
<form action="{{ route('student.destroy', ['id'=>$student->id]) }}" method="POST">
    @csrf
@method('delete')

<input type="submit" name="" value="DELETE">
</form>


                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crate New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="stuName">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control" id="roll" name="roll">
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="semester">Semester</label>
                        <select id="semester" class="form-control" name="semester">
                            <option selected disabled>Choose...</option>
                            <option>1st Semester</option>
                            <option>2nd Semester</option>
                            <option>3rd Semester</option>
                            <option>4th Semester</option>
                            <option>5th Semester</option>
                            <option>6th Semester</option>
                            <option>7th Semester</option>
                            <option>8th Semester</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="shift">Shift</label>
                        <select id="shift" class="form-control" name="shift">
                            <option selected disabled>Choose...</option>
                            <option>1st Shift</option>
                            <option>2nd Shift</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Create</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
