@extends('back.layouts.master')
@section('title' , 'Admin Panel')
@section('content')
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col-xl-12">
                    <div class="alert alert-warning">
                        Ümumi Paylaşılanlar:  <strong>{{ $posts->count() }}</strong>
                        <a href="/" class="d-block">Sayta qayıt</a>
                </div>
            </div>
        </div>
    </main>
@endsection
