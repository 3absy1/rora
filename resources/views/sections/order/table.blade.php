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
                <th>Plan</th>
                <th>Is Paid</th>
                <th>Total Price</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$order->id}}</td>
                <td>{{$order->client->name}}</td>
                <td>{{$order->plan->title}}</td>
                <td>{{$order->is_paid}}</td>
                <td>{{$order->total_price}}</td>
                <td><span>{{$order->created_at}}</span></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$order->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$order->id}}">
                            Delete
                            </button>
                    </td>
            </tr>
                         {{-- edit model --}}
                         @include('sections.order.editmodel' )


                         {{-- delete model --}}
                         @include('sections.order.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
