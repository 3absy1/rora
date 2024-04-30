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
                <th>Sim Card</th>
                <th>User 1</th>
                <th>User 2</th>
                <th>Call Ended</th>
                <th>Duration</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($calls as $call)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>



                <td>{{$call->id}}</td>
                <td>{{$call->client->name}}</td>
                <td>{{$call->simcards->phone_number}}</td>
                <td>{{$call->user1}}</td>
                <td>{{$call->user2}}</td>
                <td>{{$call->call_ended}}</td>
                <td>{{$call->duration}}</td>
                <td><span>{{$call->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$call->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$call->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

             {{-- edit model --}}
             @include('sections.call.editmodel')

             {{-- delete model --}}
             @include('sections.call.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
