@extends('layouts.app')

@section('content')

<div class="legality_container">
    @if ($privacy)
        {!! $privacy->text !!}
    @else
        <p>Privacy Policy tidak tersedia.</p>
    @endif
</div>

@endsection
