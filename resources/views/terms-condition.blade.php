@extends('layouts.app')

@section('content')

<div class="legality_container">
    @if ($terms)
        {!! $terms->text !!}
    @else
        <p>Terms & Conditions tidak tersedia.</p>
    @endif
</div>

@endsection
