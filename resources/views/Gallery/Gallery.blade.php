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
                @foreach ($galleries as $gallery)
                <div class="card" style="width: 500px">
                    <div class="card-body">
                        <img src="{{ 'storage/'.$gallery->image }}" alt="" srcset="" class="img-fluid">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>

@endsection
