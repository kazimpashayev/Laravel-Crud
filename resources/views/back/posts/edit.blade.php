@extends('back.layouts.master')
@section('title' , 'Admin Panel - Mövzuda DÜzəliş Et')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header p-0 d-flex align-items-center">
                        <h4 class="card-header-title m-3">{{ $post->name }} # {{ $post->id  }}</h4>
                        <a href="{{ url()->previous() }}" class="card-back ms-auto me-3">geri qayıt</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.posts.update', $post->id) }}" class="form" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Başlıq</label>
                                <input type="text" name="name" value="{{ $post->name }}" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Məzmun</label>
                                <textarea name="contents" id="" cols="30" rows="10" class="form-control">{{ $post->contents }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Düzəlişləri qeyd et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
