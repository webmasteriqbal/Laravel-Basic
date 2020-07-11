@extends('layouts.master')

@section('content')

<div class="row">
    <div class="offset-2 col-md-8  offset-2 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h3 class="card-title float-left">Edit Employee Info</h3>
                    <div class="create float-right">
                        <a href="" class="btn btn-primary rounded-pill p-2">Back</a>
                    </div>
                </div>
                <hr>
                <div class="form">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('employee.update',$employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Employee Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $employee->name }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="roll">Employee Phone</label>
                                <input type="text" class="form-control" id="phn" name="phn"
                                    value="{{ $employee->phn }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="roll">Employee Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $employee->address }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="shift">Shift</label>
                                <select id="shift" class="form-control" name="shift">
                                    <option selected disabled>Choose...</option>
                                    <option {{ $employee->select('1st Shift') }}>1st Shift</option>
                                    <option {{ $employee->select('2nd Shift') }}>2nd Shift</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
