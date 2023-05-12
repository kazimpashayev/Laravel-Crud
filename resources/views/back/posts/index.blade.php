@extends('back.layouts.master')
@section('title' , 'Admin Panel - Mövzular')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-xl-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="col-xl-12">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Yeni məqalə yarat</a>
        </div>
        <div class="col-xl-12">
            <table class="table table-bordered table-collapsed table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Başlıq</th>
                    <th scope="col">Məzmun</th>
                    <th scope="col">Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <th>{{ $post->name }}</th>
                        <td>{{ $post->contents }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Oxu</a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">Düzəliş et</a>
                            <a href="{{ route('admin.delete.post', $post->id) }}" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
