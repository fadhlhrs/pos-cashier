@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Inventory</h5>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Product ID</th>
                        <th scope="col ">Product Name</th>
                        <th scope="col ">Stock</th>
                        <th scope="col ">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inventories as $inventory)
                    <tr>
                        <td>{{ $inventory->id }}</td>
                        <td>{{ $inventory->product_name }}</td>
                        <td>{{ $inventory->stock }}</td>
                        <td>Rp. {{ number_format($inventory->price,2,',','.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
