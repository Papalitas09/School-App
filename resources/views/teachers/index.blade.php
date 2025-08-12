@extends('layouts.main')
@section('title', 'Teacher List')
@section('content')
    <ul class="">
        <tr class="">
            <li class="font-bold">Nama Guru</li>
        </tr>
        <tr>
          @foreach ($_teachers as $teacher)
          <li>{{$teacher->nama }}</li>
          @endforeach
        </tr>
    </ul>
@endsection

