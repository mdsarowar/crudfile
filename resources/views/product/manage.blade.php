@extends('master')
@section('title')
    manage product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Product</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>brand name</th>
                                    <th>product price</th>
                                    <th>product image</th>
                                    <th>product description</th>
                                    <th>product stutas</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->category_name}}</td>
                                            <td>{{$product->brand_name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <img src="{{asset($product->image)}}" style="height: 100px;width: 100px" alt="">
                                            </td>
                                            <td>{{$product->product_description}}</td>
                                            <td>{{$product->status==1 ? 'published':'unpublished'}}</td>
                                            <td>
                                                <a href="{{route('delete_product',['id'=>$product->id])}}" class="btn btn-danger">del</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
