@extends('layouts.main')
@section('title', 'Teacher List')
@section('content')
    

<div class="relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Nama Guru</th>
                <th scope="col" class="px-6 py-3">NIG</th>
                <th scope="col" class="px-6 py-3">Bidang Studi</th>
            </tr>
        </thead>
    </table>
    <div class="max-h-96 overflow-y-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>
                @foreach($_teachers as $teacher)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="py-2 px-1.5">{{$teacher->id}}</td>
                    <td class="py-2 px-3">{{$teacher->nama}}</td>
                    <td class="py-2 px-3">{{$teacher->nig}}</td>
                    <td class="py-2 px-3">{{$teacher->bidang_studi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

