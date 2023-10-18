@extends('layouts.admin')

@section('title')
    <title>Add product</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('adminPublic/product/index/list.css')}}">
@endsection

@section('js')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'product', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary float-right m-2"><i
                                class="fas fa-plus fa-fw fa-xs"></i>Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <th scope="col">Thứ tự</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $productItem)
                                    <tr>
                                        <th scope="row">{{ $productItem->id }}</th>
                                        <td>{{ $productItem->name }}</td>
                                        <td>{{ $productItem->price }}</td>
                                        <td>
                                            <img class="product_image_150_100" src="{{ $productItem->feature_image_path }}" alt="">
                                        </td>
                                        <td>{{ $productItem->category->name }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                                                Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
