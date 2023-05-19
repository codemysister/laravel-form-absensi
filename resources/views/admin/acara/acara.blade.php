@extends('admin.layout.layout')

@section('content')

    <div class="container">
        <a href="{{route('acara.create')}}" class="">
            <button class="p-2 my-2 bg-blue-500 rounded text-white">Tambah</button>
        </a>
        <div class="card">
            <div class="card-header">Kelola Acara</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
