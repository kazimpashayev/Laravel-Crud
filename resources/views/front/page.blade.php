@extends('front.layouts.master')
@section('title' , 'Məqalə oxu')
@section('content')

    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                       <h3>{{ $posts->name }}</h3> 
                       {{ $posts->contents }}<br><br>
                       {{ \Carbon\Carbon::parse($posts->created_at)->diffForHumans()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection