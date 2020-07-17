@extends('layouts.master')

@section('content')



<div class="container-fluid mt-5">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab"  aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab"
                    href="{{ route('categories.index') }}">Categories</a>
                <br>
                <a class="nav-link " id="v-pills-home-tab"href="{{ route('categories.trashed') }}">Trash</a>

            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="card-title float-left">Categoris</h3>
                    </div>
                    <hr>

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $c)
                                <tr>
                                    <th>{{$c->id}}</th>
                                    <td>{{$c->name}}</td>
                                    <td>
                                        <span>
                                            <form action="{{ route('categories.destroy',$c->id) }}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <input type="submit" name="" value="Trash"
                                                    class="btn btn-outline-danger">
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


    </div> div


    @endsection
