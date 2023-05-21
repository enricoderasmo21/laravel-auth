@extends('layouts.app')

@section('content')
<a href="{{route('admin.projects.index')}}">Gestisci i tuoi progetti</a>
<a href="{{route('admin.projects.create')}}">Aggiungi un progetto</a>
@endsection