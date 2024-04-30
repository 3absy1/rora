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
                <th>recharge Card</th>
                <th>Price</th>
                <th>Statue</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($recharageRequests as $recharageRequest)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$recharageRequest->id}}</td>
                <td>{{$recharageRequest->client->name}}</td>
                <td>{{$recharageRequest->recharagecard->name}}</td>
                <td>{{$recharageRequest->price}}</td>
                <td>{{$recharageRequest->statue}}</td>
                <td><span>{{$recharageRequest->created_at}}</span></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$recharageRequest->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$recharageRequest->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

              {{-- edit model --}}
              @include('sections.rechargeRequest.editmodel' )


              {{-- delete model --}}
              @include('sections.rechargeRequest.deletemodel')

            @endforeach



        </tbody>
    </table>
</div>
