@extends('layouts.master')

@section('title')
Thêm sản phẩm mới
@endsection

@section('content') 
@if(!empty($_SESSION['errors']))
    <div class="alert alert-warning">
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @php
        unset($_SESSION['errors']);
    @endphp
@endif

<div class="col-3"></div>
<div class="col-6">
    <form action="{{ url('admin/products/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" class="form-control" id="name">

        <label for="price">Giá:</label>
        <input type="text" name="price" class="form-control" id="price">

        <label for="img">Ảnh:</label>
        <input type="file" name="img" class="form-control" id="img">

        <label for="id_categories">Loại:</label>
        <select class="form-control" name="id_categories" id="id_categories">
            @foreach ($categoryPluck as $id => $name)
                <option value="{{ $id }}" class="form-control">{{ $name }}</option>
            @endforeach
        </select>

        <label for="description">Mô tả:</label>
        <textarea name="description" id="description" class="form-control"></textarea>

        <div class="text-center m-5">
            <button type="submit" class="btn btn-outline-primary">Thêm</button>
        </div>
    </form>
</div>
@endsection
