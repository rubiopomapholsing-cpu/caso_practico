@extends('layouts.app')

@section('title', 'Nuevo anexo | SANTRIX ANEXO LOCAL')
@section('page-title', 'Nuevo anexo')

@section('content')
    <form action="{{ route('anexos.store', [], false) }}" method="POST">
        @csrf
        @include('anexos._form')
    </form>
@endsection
