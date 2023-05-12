@extends('front.layouts.master')
@section('title' , 'Əsas Səhifə')
@section('content')
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Laravel Album</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <p>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary my-2">Admin Panel</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col-xl-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#" class="card-title text-decoration-none text-dark ">CSS Blog</a>
                                <p class="card-text mt-2 mb-3 lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero fugit eius amet, sint fuga beatae, saepe qui iusto deleniti excepturi molestias animi similique! Cumque aspernatur quidem sint. Illum, porro error.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">20 deq once</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
