@extends('client.layouts.master')
@section('title')
    Trang Chủ
@endsection
@section('content')
    <div class="col-lg-4 border-start custom-border">
        @foreach ($data as $item)
            <div class="post-entry-1">
                <a href=""><img src="{{asset($item->pro_image)}}" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">{{$item->pro_name}}</span> <span class="mx-1">&bullet;</span>
                <span>{{$item->days}}</span>
                </div>
                <h2><a href="{{ url('/chitiet', [$item->id]) }}">{{$item->title}}</a></h2>
            </div>
        @endforeach


    </div>
    <div class="col-lg-4 border-start custom-border">
        {{-- <div class="post-entry-1">
            <a href=""><img src="/client/assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
            <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                <span>Jul 5th '22</span>
            </div>
            <h2><a href="">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
        </div>
        <div class="post-entry-1">
            <a href=""><img src="/client/assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
            <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                <span>Mar 1st '22</span>
            </div>
            <h2><a href="">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
        </div>
        <div class="post-entry-1">
            <a href=""><img src="/client/assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
            <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                <span>Jul 5th '22</span>
            </div>
            <h2><a href="">5 Great Startup Tips for Female Founders</a></h2>
        </div> --}}
    </div>
    <div class="col-lg-4">
        <h1>Top View</h1>
        @foreach ($view as $item)
        <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">{{$item->pro_name}}</span> <span class="mx-1">&bullet;</span>
                <span>{{$item->days}}</span>
            </div>
            <h2 class="mb-2"><a href="">{{$item->pro_name}}</a></h2>
            <span class="author mb-3 d-block">View:{{$item->view}}</span>
            <span class="author mb-3 d-block">Tác Giả:{{$item->tacgia}}</span>
        </div>
        @endforeach
    </div>
@endsection
