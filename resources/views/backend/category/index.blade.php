@extends('backend.layouts.app')

@section('title')
    Xe Đạp | Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Category</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('messages.msg')
                    @can('create', App\Category::class)
                        <a name="" id="" class="btn btn-primary mb-3" href="{{ route('category.create') }}" role="button">Create Category</a>
                    @endcan
                    <table id="tableProduct" class="table table-bordered" style="align-align: center;">
                        <thead>
                        <tr>
                            <th>Số thứ tự</th>
                            <th>Tên thể loại</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$category->ten_the_loai}}</td>
                                <td style="align-items: center;">
{{--                                    <a class="btn btn-info btn-sm" href="{{route('category.edit', $category->id)}}">--}}
{{--                                        <i class="fas fa-pencil-alt">--}}
{{--                                        </i>--}}
{{--                                        Edit--}}
{{--                                    </a>--}}
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
