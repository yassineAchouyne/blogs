@extends('admin.layouts.app')

@section('content')
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content d-flex justify-content-between">
                        <div>
                            <h4>Gestion Categories</h4>
                            @if (session('success')) <h3 class="text-success">{{ session('success') }}</h3>@endif
                        </div>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add">
                            Add new Categorie
                        </button>
                        <!-- Modal add -->
                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form class="modal-body" method="post" action="{{route('categorie.store')}}"> @csrf
                                        <div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" required value="" name="title" id="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        @foreach($categories as $categorie)
                        <div class="col-lg-4">
                            <div class="blog-post">

                                <div class="down-content">
                                    <a>
                                        <h4>{{$categorie->title}}</h4>
                                    </a>

                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edite{{$categorie->id}}">
                                                            Edite
                                                        </button>

                                                    </li>
                                                    <li>
                                                        <form action="{{route('categorie.destroy',['categorie'=>$categorie->id])}}" method="post"> @csrf @method('delete')
                                                            <button type="supmit" class="btn btn-danger btn-sm">
                                                                delete
                                                            </button>
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal edite -->
                                    <div class="modal fade" id="edite{{$categorie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form class="modal-body" method="post" action="{{route('categorie.update',['categorie'=>$categorie->id])}}"> @csrf @method('put')
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" class="form-control" required value="{{$categorie->title}}" name="title" id="title" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection