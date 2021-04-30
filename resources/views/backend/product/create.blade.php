@extends('backend.layouts.app')

@section('title')
    Tạo sản phẩm | Tạo sản phẩm
@endsection

@section('content')
    <div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                @include('messages.msg')
                <div class="card-header">
                    <h3 class="card-title">Tạo sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action ="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ten_san_pham">Tên sản phẩm<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" placeholder="Nhập tên sản phẩm" value="{{ old('ten_san_pham') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="sku">Mã SKU<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="sku" name="sku" placeholder="sku" value="{{ old('sku') }}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Mô tả</label>
                                    <textarea class="form-control" id="mo_ta" rows="3" id="mo_ta" name="mo_ta" placeholder="Nhập mô tả" value="{{ old('mo_ta') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="so_luong">Nhập số lượng<span style="color:red">*</span></label>
                                    <input type="number" tep=any min="1"  class="form-control" id="so_luong" name="so_luong" placeholder="Nhập số lượng" value="{{ old('so_luong') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="don_gia">Nhập giá sản phẩm<span style="color:red">*</span></label>
                                    <input type="text"  class="form-control" id="gia_san_pham" name="gia_san_pham" placeholder="Nhập đơn giá" value="{{ old('gia_san_pham') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Chọn thể loại sản phẩm<span style="color:red">*</span></label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($listCategories as $category)
                                            <option value="{{ $category->id}}">{{$category->ten_the_loai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="InputFile">Chọn Hình ảnh<span style="color:red">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="InputFile" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn Hình ảnh</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div style="border-top: 2px solid #cdcdcd">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nhan_hieu">Nhập Nhãn hiệu</label>
                                    <input type="text"  class="form-control" id="nhan_hieu" name="nhan_hieu" placeholder="Nhập nhãn hiệu" value="{{ old('nhan_hieu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="khung">Nhập số khung</label>
                                    <input type="text"  class="form-control" id="khung" name="khung" placeholder="Nhập số khung" value="{{ old('khung') }}">
                                </div>
                                <div class="form-group">
                                    <label for="khung">Nhập kích thước Dài x Rộng x Cao</label>
                                    <input type="text"  class="form-control" id="kich_thuoc" name="kich_thuoc" placeholder="Nhập kích thước" value="{{ old('kich_thuoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="lop_truoc">Nhập lốp trước</label>
                                    <input type="text"  class="form-control" id="lop_truoc" name="lop_truoc" placeholder="Nhập lốp trước" value="{{ old('lop_truoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="lop_sau">Nhập lốp sau</label>
                                    <input type="text"  class="form-control" id="lop_sau" name="lop_sau" placeholder="Nhập lốp sau" value="{{ old('lop_sau') }}">
                                </div>
                                <div class="form-group">
                                    <label for="trong_luong">Nhập trọng lượng</label>
                                    <input type="text"  class="form-control" id="trong_luong" name="trong_luong" placeholder="Nhập trọng lượng" value="{{ old('trong_luong') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="xuat_xu">Nhập xuất xứ</label>
                                    <input type="text"  class="form-control" id="xuat_xu" name="xuat_xu" placeholder="Nhập xuất xứ" value="{{ old('xuat_xu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="bao_hanh">Nhập bảo hành</label>
                                    <input type="text"  class="form-control" id="bao_hanh" name="bao_hanh" placeholder="Nhập bảo hành" value="{{ old('bao_hanh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="mau_sac">Nhập màu sắc</label>
                                    <input type="text"  class="form-control" id="mau_sac" name="mau_sac" placeholder="Nhập màu sắc" value="{{ old('mau_sac') }}">
                                </div>
                                <div class="form-group">
                                    <label for="cong_suat">Nhập công suất</label>
                                    <input type="text"  class="form-control" id="cong_suat" name="cong_suat" placeholder="Nhập công suất" value="{{ old('cong_suat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="dong_co">Nhập động cơ</label>
                                    <input type="text"  class="form-control" id="dong_co" name="dong_co" placeholder="Nhập động cơ" value="{{ old('dong_co') }}">
                                </div>
                                <div class="form-group">
                                    <label for="den_xe">Nhập đèn xe</label>
                                    <input type="text"  class="form-control" id="den_xe" name="den_xe" placeholder="Nhập đèn xe" value="{{ old('den_xe') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="hang_san_xuat">Nhập hãng sản xuất</label>
                                    <input type="text"  class="form-control" id="hang_san_xuat" name="hang_san_xuat" placeholder="Nhập hãng sản xuất" value="{{ old('hang_san_xuat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="giay_chung_nhan">Nhập giấy chứng nhận</label>
                                    <input type="text"  class="form-control" id="giay_chung_nhan" name="giay_chung_nhan" placeholder="Nhập giấy chứng nhận" value="{{ old('giay_chung_nhan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="van_toc">Nhập vận tốc</label>
                                    <input type="text"  class="form-control" id="van_toc" name="van_toc" placeholder="Nhập vận tốc" value="{{ old('van_toc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ac_quy">Nhập ác quy</label>
                                    <input type="text"  class="form-control" id="ac_quy" name="ac_quy" placeholder="Nhập ác quy" value="{{ old('ac_quy') }}">
                                </div>
                                <div class="form-group">
                                    <label for="thoi_gian_sac">Nhập thời gian sạc</label>
                                    <input type="text"  class="form-control" id="thoi_gian_sac" name="thoi_gian_sac" placeholder="Nhập thời gian sạc" value="{{ old('thoi_gian_sac') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" >
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" >Tạo sản phẩm</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
    <!-- /.col -->
    </div>
@endsection
