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
                <th>User 2</th>
                <th>Amount</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($creditTransactions as $creditTransaction)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$creditTransaction->id}}</td>
                <td>{{$creditTransaction->client->name}}</td>
                <td>{{$creditTransaction->user2}}</td>
                <td>{{$creditTransaction->amount}}</td>
                <td><span>{{$creditTransaction->created_at}}</span></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$creditTransaction->id}}">
                    Edit
                    </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$creditTransaction->id}}">
                        Delete
                        </button>
                    </td>
            </tr>
             {{-- edit model --}}
             @include('sections.creditTransaction.editmodel' )


             {{-- delete model --}}
             @include('sections.creditTransaction.deletemodel')
            @endforeach

        </tbody>
    </table>
</div>
