@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Transaction History</h5>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Transaction ID</th>
                        <th scope="col ">Total Amount</th>
                        <th scope="col ">Total Price</th>
                        <th scope="col ">Total Payment</th>
                        <th scope="col ">Change</th>
                        <th scope="col ">Cashier</th>
                        <th scope="col ">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->total_amount }}</td>
                        <td>{{ $transaction->total_price }}</td>
                        <td>{{ $transaction->total_payment }}</td>
                        <td>{{ $transaction->change }}</td>
                        <td>{{ $transaction->cashier_name }}</td>
                        <td>{{ $transaction->created_at}}</td>
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