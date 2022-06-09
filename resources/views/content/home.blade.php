@extends('layout.layoutHome')

@section('title', 'Kuskus Food Forum')

@section('content')
{{Auth::check()}}
@endsection