@extends('back.layouts.master')
@section('title' , 'Admin Panel - Yeni Mövzu Yarat')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header p-0 d-flex align-items-center">
                        <h4 class="card-header-title m-3">Yeni məqalə yarat</h4>
                        <a href="{{ url()->previous() }}" class="card-back ms-auto me-3">geri qayıt</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.posts.store') }}" class="form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Başlıq</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Məzmun</label>
                                <textarea name="contents" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Düzəlişləri qeyd et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
