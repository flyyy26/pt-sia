@extends('layouts.app')

@section('content')
<div class="container_detail_artikel">
    <div class="detail_artikel_img">
        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}">
        <div class="divider_bottom_normal"></div>
    </div>
    <div class="container_container_artikel">
        <div class="detail_artikel_heading">
            <h1>{{ $artikel->title }}</h1>
            <span>Posted By : {{ $artikel->author->name }} / On : {{ $artikel->created_at->format('d F Y') }} / In : {{ $kategori->name }}</span>
        </div>
        <div class="detail_artikel_content">
            {!! $artikel->description !!}
        </div>
    </div>
</div>
@endsection