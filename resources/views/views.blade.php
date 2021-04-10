@extends('layouts.app')

@section('content')
    @if (Request::is('light'))
        @section('subtitle') Light @endsection
        @livewire('light')
    @endif
    @if (Request::is('pricing'))
        @section('subtitle') Pricing @endsection
        @livewire('calculate-pricing')
    @if (Request::is('sales-dashboard'))
        @section('subtitle') Sales Dashboard @endsection
        @livewire('sales-dashboard')
    @endif
@endsection