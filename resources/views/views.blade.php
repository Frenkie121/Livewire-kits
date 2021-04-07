@extends('layouts.app')

@section('content')
    @if (Request::is('light'))
        @section('subtitle') Light @endsection
        @livewire('light')
    @endif
@endsection