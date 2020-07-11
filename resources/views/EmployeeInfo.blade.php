@extends('layouts.master')

@section('content')

<div class="row">
    <div class="offset-2 col-md-8  offset-2 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h3 class="card-title float-left">Employee Info</h3>
                    <div class="create float-right">
                        <a href="#" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#create">Crate
                            New Employee</a>
                    </div>
                </div>
                <hr>
                <div class="table">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Employee Phone</th>
                                <th scope="col">Employee Address</th>
                                <th scope="col">Employee Shift</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employers as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phn }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->shift }}</td>
                                <td>
                                    <span><a href="{{ route('employee.edit',$item->id) }}">Edit</a></span>
                                    <span>
                                        <form action="{{ route('employee.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                DELETE
                                            </button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @empty
                        <tfoot>
                            <tr>
                                <td>
                                    <p class="text-muted">No Data Aviable </p>
                                </td>
                            </tr>
                        </tfoot>
                        @endforelse


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
                <h5 class="modal-title" id="exampleModalLabel">Crate New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Employee Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="phn">Employee Phone</label>
                            <input type="text" class="form-control" id="phn" name="phn"  value="{{ old('phn') }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="address">Employee Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="{{ old('address') }}">
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
