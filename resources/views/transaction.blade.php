@extends('base')
@section('content')

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">New Transaction</h5>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Nama Produk</th>
                        <th scope="col ">Harga</th>
                        <th scope="col ">Jumlah</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>L'oreal Shampoo 400ml</td>
                        <td>62.000</td>
                        <td>200pcs</td>
                        <td>
                            <span class="badge badge-info text-white ">Done</span>
                            <span class="badge badge-danger text-white ">Pending</span>
                        </td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <a href="# " class="btn btn-primary text-white ">
                                    <i class='bx bx-check'></i>
                                </a>
                                <a href="# " class="btn btn-info text-white ">
                                    <i class='bx bx-pencil'></i>
                                </a>
                                <a href="# " class="btn btn-danger text-white ">
                                    <i class='bx bx-trash'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
                <div class="col-12">
                    <ul class="list-group product-list">
                        @foreach($inventories as $inventory)
                        @if($inventory->stock != 0)
                        <li class="list-group-item d-flex justify-content-between align-items-center active-list">
                            <div class="text-group">
                                <p class="m-0">{{ $inventory->product_id }}</p>
                                <p class="m-0">{{ $inventory->product_name }}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-secondary mr-1"><i class="mdi mdi-cube-outline"></i></span>
                                <p class="m-0">{{ $inventory->stock }}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-green mr-1"><i class="mdi mdi-coin"></i></span>
                                <p class="m-0">Rp. {{ number_format($inventory->price,2,',','.') }}</p>
                            </div>
                            <a href="#" class="btn btn-icons btn-rounded btn-inverse-outline-primary font-weight-bold btn-pilih" role="button"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                            
                        @else
                        <li class="list-group-item d-flex justify-content-between align-items-center active-list">
                            <div class="text-group">
                                <p class="m-0">{{ $inventory->product_id }}</p>
                                <p class="m-0 txt-light">{{ $inventory->product_name }}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-green mr-1"><i class="mdi mdi-coin"></i></span>
                                <p class="m-0">Rp. {{ number_format($inventory->price,2,',','.') }}</p>
                            </div>
                            <a href="#" class="btn btn-icons btn-rounded btn-inverse-outline-primary font-weight-bold btn-pilih" role="button"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                        @endif
                            
                        @endforeach
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
