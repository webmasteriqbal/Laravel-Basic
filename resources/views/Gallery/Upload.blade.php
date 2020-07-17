@extends('layouts.master')

@section('content')

<div class="row">
    <div class="offset-2 col-md-8  offset-2 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h3 class="card-title float-left">Upload Gallery Image</h3>
                    <div class="create float-right">
                        {{-- <a href="" class="btn btn-primary rounded-pill p-2">Back</a> --}}
                    </div>
                </div>
                <hr>
                <div class="form">
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
