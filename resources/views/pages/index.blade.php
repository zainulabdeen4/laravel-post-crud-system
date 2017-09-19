@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$index}}</h1>
<p>welcome to index</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a>
<a class="btn btn-success btn-lg" href="/register" role="register">login</a></p>
</div>
@endsection