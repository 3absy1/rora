<div class="card-body">
    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
        <thead>
            <tr>
                <th scope="col" style="width: 10px;">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" id="checkAll01" value="option">
                    </div>
                </th>
                <th>ID</th>
                <th>Client</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Create At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientPayments as $clientPayment)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>

                <td>{{$clientPayment->id}}</td>
                <td>{{$clientPayment->client->name}}</td>
                <td>{{$clientPayment->paymentMethod->name}}</td>
                <td>{{$clientPayment->amount}}</td>
                <td><span>{{$clientPayment->created_at}}</span></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
