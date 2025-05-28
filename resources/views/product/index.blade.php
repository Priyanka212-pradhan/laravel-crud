@extends('layouts.frontend')
@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class="card-header">
                        <h4> Products List
                            <a href ="{{url('product/create')}}" class = "btn btn-primary float-end"> Add Products</a>
                        </h4>
                    </div> 
                    <div class="card-body">
                        <table class = "table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Quantity</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product-> id}}</td>
                                    <td>{{ $product-> product_name}}</td>
                                    <td>{{ $product-> product_price}}</td>
                                    <td>{{ $product-> quantity}}</td>
                                    <td>
                                        <a href = "{{ route('product.edit', $product-> id) }}" class = "btn btn-success">Edit </a>
                                        <a href = "{{ route('product.show', $product-> id) }}" class = "btn btn-info">Show </a>
                                        

                                        <form action = "{{ route('product.destroy', $product-> id) }}" method = "POST" class = "d-inline">
                                            @csrf 
                                            @method('DELETE')
                                            <button type = "submit" class = "btn btn-danger"> Delete </button>
                                        </form>

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
@endsection