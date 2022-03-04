@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">ItSolutionStuff.com</h3>
                    <br/>
                    <h2>{{ $post->title }}</h2>
                    <p>
                        {{ $post->body }}
                    </p>
                    <hr />
                    @include('posts.commentDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name=body></textarea>
                            <input type=hidden name=post_id value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type=submit class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="{{asset('css/show.css')}}">
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="d-flex justify-content-between p-2 px-3">
                    <div class="d-flex flex-row align-items-center"> <img src="https://play-lh.googleusercontent.com/ObdbSatQvNUymufVs3vL5YmhGdvs3w5vvTciaGLFQOZoREVAEIIueioFOrWk9je_fqxR" width="50" class="rounded-circle">
                        <div class="d-flex flex-column ml-2"> <span class="font-weight-bold">{{$post->user->name}}</span> <small class="text-primary">Collegues</small> </div>
                    </div>
                    <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2">20 mins</small> <i class="fa fa-ellipsis-h"></i> </div>
                </div> <img src="https://i.imgur.com/xhzhaGA.jpg" class="img-fluid">
                <div class="p-2">
                    <p class="text-justify">{{$post->body}}</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center"> <i class="fa fa-heart"></i> <i class="fa fa-smile-o ml-2"></i> </div>
                        <div class="d-flex flex-row muted-color"> <span>{{$post->comments()->get()->count()}}</span> <span class="ml-2">Share</span> </div>
                    </div>
                    <hr>
                    <!-- commentPost & commentDisplay -->
                    <div class="comments">
                    @include('posts.commentDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                    <form method="post" action="{{ route('comment.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="comment-input"> 
                                <input type="text" class="form-control" name=body placeholder="Add your comment. Enter to add comment">
                                <input type=hidden name=post_id value="{{ $post->id }}" />
                                <div class="fonts"> <i class="fa fa-paper-plane" aria-hidden="true" type=submit></i> </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection