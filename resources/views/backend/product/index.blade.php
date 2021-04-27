@extends('backend.layouts.app')
@section('title')
    Xe dap Shop | Product
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ">{{__('messages.product.list') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('messages.msg')
                    <a name="" id="" class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">{{__('messages.product.create') }}</a>
                    <table id="tableProduct" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{{__('messages.product.sku') }}</th>
                            <th>{{__('messages.product.name') }}</th>
                            <th>{{__('messages.product.label') }}</th>
                            <th>{{__('messages.product.made') }}</th>
                            <th style="width: 200px;">{{__('messages.product.description') }}</th>
                            <th>{{__('messages.product.price') }}</th>
                            <th>{{__('messages.product.quantity') }}</th>
                            <th>{{__('messages.product.image') }}</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->ten_san_pham}}</td>
                                <td>{{$product->hang_san_xuat}}</td>
                                <td>{{$product->nhan_hieu}}</td>
                                <td>{{$product->xuat_xu}}</td>
                                <td>{{$product->mo_ta}}</td>
                                <td>{{number_format($product->gia_san_pham, 0, '', ',')}} VNĐ</td>
                                <td>{{$product->so_luong}}</td>
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
{{--                    <div class="d-flex justify-content-center mt-3">{{ $products->links() }}</div>--}}
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection



