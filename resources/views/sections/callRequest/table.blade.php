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
                <th>User 1</th>
                <th>User 2</th>
                <th>Status</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($callRequests as $callRequest)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>

                <td>{{$callRequest->id}}</td>
                <td>{{$callRequest->client->name}}</td>
                <td>{{$callRequest->user1}}</td>
                <td>{{$callRequest->user2}}</td>
                <td>{{$callRequest->status}}</td>
                <td><span>{{$callRequest->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$callRequest->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$callRequest->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

             {{-- edit model --}}
             @include('sections.callRequest.editmodel')

             {{-- delete model --}}
             @include('sections.callRequest.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
