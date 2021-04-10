@extends('layouts.app')

@section('content')
    @if (Request::is('light'))
        @section('subtitle') Light @endsection
        @livewire('light')
    @endif
    @if (Request::is('pricing'))
        @section('subtitle') Pricing @endsection
        @livewire('calculate-pricing')
    @endif
    @if (Request::is('students'))
        @section('subtitle') Students @endsection
        @livewire('students')
    @endif
@endsection