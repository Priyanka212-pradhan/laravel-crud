@extends('layouts.frontend')
@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class="card-header">
                        <h4> Show Products Detail
                            <a href ="{{url('product/create')}}" class = "btn btn-primary float-end"> Add Products</a>
                        </h4>
                    </div> 
                    <div class="card-body">
                        <label> Product Name:</label>
                        <p>
                            {{ $product->product_name}}
                        </p>
                        <label> Product Price:</label>

                        <p>
                            {{ $product->product_price}}
                        </p>
                        <label> Quantity:</label>

                        <p>
                            {{ $product->quantity}}
                        </p>
                    
                            
                    </div> 

                </div>
            </div>

        </div>
    </div>
@endsection