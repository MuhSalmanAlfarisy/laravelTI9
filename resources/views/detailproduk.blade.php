@extends('layouts.app')

@section('content')
<h1>ini adalah detail produk</h1>
@foreeach($produk as $p)
<p>{{$p->nama}}</p>
@endforeach
@endsection