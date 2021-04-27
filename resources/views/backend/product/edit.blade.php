@extends('backend.layouts.app')

@section('title')
    {{__('messages.product.update') }}
@endsection

@section('content')
    <div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                @include('messages.msg')
                <div class="card-header">
                    <h3 class="card-title">{{__('messages.product.update') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action ="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">{{__('messages.product.name') }}</label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="{{__('messages.product.name') }}" value="{{ $product->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="label">{{__('messages.product.label') }}</label>
                                    <input type="label"  class="form-control" id="label" name="label" placeholder="{{__('messages.product.label') }}" value="{{ $product->label }}" >
                                </div>
                                <div class="form-group">
                                    <label for="made">{{__('messages.product.made') }}</label>
                                    <input type="made"  class="form-control" id="made" name="made" placeholder="{{__('messages.product.made') }}" value="{{ $product->made }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="description">{{__('messages.product.description') }}</label>
                                    <input type="description"  class="form-control" id="description" name="description" placeholder="{{__('messages.product.description') }}" value="{{ $product->description }}" >
                                </div>
                                <div class="form-group">
                                    <label for="quantity">{{__('messages.product.quantity') }}<span style="color:red">*</span></label>
                                    <input type="number" tep=any min="1"  class="form-control" id="quantity" name="quantity" placeholder="{{__('messages.product.quantity') }}" value="{{ $product->quantity }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">{{__('messages.product.price') }}<span style="color:red">*</span></label>
                                    <input type="text"  class="form-control" id="price" name="price" placeholder="{{__('messages.product.price') }}" value="{{ $product->price }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" >
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" >{{__('messages.product.update') }}</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
    <!-- /.col -->
    </div>

@endsection
