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
                <form role="form" action ="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">{{__('messages.product.name') }}<span style="color:red">*</span></label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="{{__('messages.product.name') }}" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="sku">{{__('messages.product.sku') }}</label>
                                    <input type="sku" class="form-control" id="sku" name="sku" placeholder="{{__('messages.product.sku') }}" value="{{ old('sku') }}">
                                </div>
                                <div class="form-group">
                                    <label for="label">{{__('messages.product.label') }}<span style="color:red">*</span></label>
                                    <input type="label"  class="form-control" id="label" name="label" placeholder="{{__('messages.product.label') }}" value="{{ old('label') }}">
                                </div>
                                <div class="form-group">
                                    <label for="made">{{__('messages.product.made') }}<span style="color:red">*</span></label>
                                    <input type="made" class="form-control" id="made" name="made" placeholder="{{__('messages.product.made') }}" value="{{ old('made') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="InputFile">{{__('messages.product.image') }}<span style="color:red">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="InputFile" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">{{__('messages.product.image') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="description">{{__('messages.product.description') }}<span style="color:red">*</span></label>
                                    <input type="description"  class="form-control" id="description" name="description" placeholder="{{__('messages.product.description') }}" value="{{ old('description') }}"  required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">{{__('messages.product.quantity') }}<span style="color:red">*</span></label>
                                    <input type="number" tep=any min="1"  class="form-control" id="quantity" name="quantity" placeholder="{{__('messages.product.quantity') }}" value="{{ old('quantity') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">{{__('messages.product.price') }}<span style="color:red">*</span></label>
                                    <input type="text"  class="form-control" id="price" name="price" placeholder="{{__('messages.product.price') }}" value="{{ old('price') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('messages.product.category') }}<span style="color:red">*</span></label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($listCategories as $category)
                                            <option value="{{ $category->id}}">{{$category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="card-footer" >
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" >{{__('messages.product.create') }}</button>
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
