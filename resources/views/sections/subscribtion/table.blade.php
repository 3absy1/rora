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
                <th>Start At</th>
                <th>End At</th>
                <th>Is Active</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($subscribtions as $subscribtion)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$subscribtion->id}}</td>
                @if ($subscribtion->$client)
                <td>{{$subscribtion->client->name}}</td>
                @else
                <td>Deleted Client</td>
                @endif
                <td>{{$subscribtion->plan->title}}</td>
                <td>{{$subscribtion->start_at}}</td>
                <td>{{$subscribtion->end_at}}</td>
                <td>{{$subscribtion->is_active}}</td>
                <td><span>{{$subscribtion->created_at}}</span></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$subscribtion->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$subscribtion->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

             {{-- edit model --}}
             @include('sections.subscribtion.editmodel' )


             {{-- delete model --}}
             @include('sections.subscribtion.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
