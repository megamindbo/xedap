@extends('backend.layouts.app')
@section('title')
    Xe dap Shop | Product
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ">List Product</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{--                    @include('messages.msg')--}}
                    <a name="" id="" class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">Create Product</a>
                    <table id="dataTable" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Hãng sản xuất</th>
                            <th>Nhãn Hiệu</th>
                            <th>Xuất xứ</th>
                            <th>Mô tả</th>
                            <th>Bảo hành khung</th>
                            <th>Bảo hành khác</th>
                            <th>Số chứng nhận</th>
                            <th>Mã số khung</th>
                            <th>Chiều dài rộng cao</th>
                            <th>Chiều dài cơ sở</th>
                            <th>Lốp trước</th>
                            <th>Lốp sau</th>
                            <th>Màu sắc</th>
                            <th>Động cơ</th>
                            <th>Công suất</th>
                            <th>Thao tác</th>
                            <th>Quãng đường</th>
                            <th>Vận tốc</th>
                            <th>Trọng lượng</th>
                            <th>Số người cho phép</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->ten_san_pham}}</td>
                                <td>{{$product->hang_san_xuat}}</td>
                                <td>{{$product->nhan_hieu}}</td>
                                <td>{{$product->xuat_xu}}</td>
                                <td>{{$product->mo_ta}}</td>
                                <td>{{$product->bao_hanh_khung}}</td>
                                <td>{{$product->baohanh_khac}}</td>
                                <td>{{$product->so_chung_nhan}}</td>
                                <td>{{$product->ma_so_khung}}</td>
                                <td>{{$product->chieu_dai_rong_cao}}</td>
                                <td>{{$product->chieu_dai_co_so}}</td>
                                <td><img src="{{asset('img/frontend/product/all/'.$product->image)}}" alt="" style="width: 150px;height:150px;"></td>
                                <td>
                                    <a href="{{route('admin.product.edit', $product->id)}}"><i class="far fa-edit"></i></a>
                                </td>
                                <td>
                                    <form id="delete-form-{{$product->id}}" action="{{route('admin.product.destroy',$product->id)}}" style="display:none" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="javascript:document.getElementById('delete-form-{{$product->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center mt-3">{{ $products->links() }}</div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection



