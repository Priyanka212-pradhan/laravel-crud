@extends('layouts.frontend')
@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class="card-header">
                        <h4> Add Products
                            <a href ="{{url('product/create')}}" class = "btn btn-primary float-end"> Add Products</a>
                        </h4>
                    </div> 
                    <div class="card-body">
                        <form action ="{{ route('product.store') }}" method = "POST">
                            @csrf 
                            <div class = "mb3">
                                <label>Product Name</label>
                                <input type = "text" name ="product_name" class = "form-control"/>
                                @error('product_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class = "mb3">
                                <label>Product Price</label>
                                <input type = "text" name ="product_price" class = "form-control"/>
                                @error('product_price') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class = "mb3">
                                <label>Quantity</label>
                                <input type = "text" name ="quantity" class = "form-control"/>
                                @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class ="mb3">
                                <button type = "submit" class = "btn btn-primary">Save<button> 
                            </div>
                
                        </form>
                    </div> 

                </div>
            </div>

        </div>
    </div>
@endsection