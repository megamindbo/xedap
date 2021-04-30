@extends('backend.layouts.app')
@section('title')
    Xe dap Shop | Product
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ">Danh sách sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('messages.msg')
                    <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.product.create') }}" role="button">Tạo sản phẩm mới</a>
                    <table id="tableProduct" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sku</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th style="">Số lượng</th>
                            <th>Đơn giá</th>
                            <th>HÌnh ảnh</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->ten_san_pham}}</td>
                                <td>{{$product->mo_ta}}</td>
                                <td>{{$product->so_luong}}</td>
                                <td>{{number_format($product->gia_san_pham, 0, '', ',')}} VNĐ</td>
                                <td><img src="{{asset('img/frontend/product/all/'.$product->image)}}" alt="" style="width: 80px;height:80px;"></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('product.edit', $product->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form id="delete-form-{{$product->id}}" action="{{route('product.destroy',$product->id)}}" style="display:none" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a class="btn btn-danger btn-sm" href="javascript:document.getElementById('delete-form-{{$product->id}}').submit();" onclick=" return confirm('BẠn có chắc chắn muốn xóa sản phẩm này?') ">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection



