@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('adminPublic/slider/index/index.css') }}">
    <script type="text/javascript" src="{{ asset('adminPublic/main.js') }}"></script> --}}
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@11.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminPublic/main.js') }}"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Role', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right m-2"><i
                                class="fas fa-plus fa-fw fa-xs"></i>Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Thứ tự</th>
                                    <th scope="col">Tên vai trò</th>
                                    <th scope="col">Mô tả vai trò</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $role->id }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->display_name }}</td>
                                        <td>
                                            <a href="{{ route('roles.edit', ['id' => $role->id]) }}"
                                                class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="" data-url="{{ route('roles.delete', ['id' => $role->id]) }}" 
                                                class="btn btn-sm btn-danger action_delete"> <i class="fas fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $roles->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
