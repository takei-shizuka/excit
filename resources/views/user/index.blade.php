@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
    @parent
    インデックスのページ

@endsection

@ssection('content')
    <table>
    <tr><th>Name</th><th>Article</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
            <td>@if ($item->article != null)
            <table width="100%">
            @foreach($item->articles as $obj)
            <tr><td>{{$obj->getData()}}</td></tr>  
            @endforeach
            </table>
                @endif
            </td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection