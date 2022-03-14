@extends('master')
@section('title')
    add product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Brand name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="product_description" id="" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Stutas</label>
                                    <div class="col-md-8">
                                        <label for=""> <input type="radio" name="status"checked value="1">Published</label>
                                        <label for=""> <input type="radio" name="status" value="0">Unpublished</label>

                                    </div>
                                </div>
                                <div class="form-group ">
                                        <input type="submit" name="" class="btn btn-outline-success btn-block" value="Add product">
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
