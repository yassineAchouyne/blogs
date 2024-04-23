@extends('admin.layouts.app')

@section('content')
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content d-flex justify-content-between">
                        <div>
                            <h4>Gestion Articles</h4>
                            @if (session('success')) <h3 class="text-success">{{ session('success') }}</h3>@endif
                        </div>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add">
                            Add new Article
                        </button>
                        <!-- Modal add -->
                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form class="modal-body" method="post" action="{{route('article.store')}}" enctype="multipart/form-data"> @csrf
                                        <div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" required value="" name="title" id="title" placeholder="Title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tag" class="form-label">Tag</label>
                                                <input type="text" class="form-control" required name="tag" value="" id="tag" placeholder="Tag">
                                            </div>
                                            <div class="mb-3">
                                                <label for="content" class="form-label">Content</label>
                                                <textarea class="form-control" name="content" required id="content" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="categorie" class="form-label">Categorie</label>
                                                <select class="form-control" name="categorie" required aria-label="Categorie">
                                                    @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}">{{$categorie->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keyword" class="form-label">Keyword</label>
                                                <input type="text" class="form-control" required name="keyword" value="" id="keyword" placeholder="example1,example2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="image" name="image" required accept="image/jpeg, image/png">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div </div>
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
                        @foreach($articles as $article)
                        <div class="col-lg-4">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{Storage::url($article->image)}}" alt="" style="height:321px">
                                </div>
                                <div class="down-content">
                                    <span>{{$article->tag}}</span>
                                    <a>
                                        <h4>{{$article->title}}</h4>
                                    </a>

                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edite{{$article->id}}">
                                                            Edite
                                                        </button>

                                                    </li>
                                                    <li>
                                                        <form action="{{route('article.destroy',['article'=>$article->id])}}" method="post"> @csrf @method('delete')
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
                                    <div class="modal fade" id="edite{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form class="modal-body" method="post" action="{{route('article.update',['article'=>$article->id])}}" enctype="multipart/form-data"> @csrf @method('put')
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" class="form-control" required value="{{$article->title}}" name="title" id="title" placeholder="Title">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tag" class="form-label">Tag</label>
                                                            <input type="text" class="form-control" required name="tag" value="{{$article->tag}}" id="tag" placeholder="Tag">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="content" class="form-label">Content</label>
                                                            <textarea class="form-control" name="content" required id="content" rows="3">{{$article->content}}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="categorie" class="form-label">Categorie</label>
                                                            <select class="form-control" name="categorie" required aria-label="Categorie">
                                                                @foreach($categories as $categorie)
                                                                <option value="{{$categorie->id}}" {{$article->categorie_id == $categorie->id?'selected':''}}>{{$categorie->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keyword" class="form-label">Keyword</label>
                                                            <input type="text" class="form-control" required name="keyword" value="{{$article->keyword}}" id="keyword" placeholder="example1,example2">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Image</label>
                                                            <input class="form-control" type="file" id="image" name="image" accept="image/jpeg, image/png">
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