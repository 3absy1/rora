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
                <th>Phone</th>
                <th>Is Active</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($sims as $sim)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$sim->id}}</td>
                <td>{{$sim->phone_number}}</td>
                <td>{{$sim->is_active}}</td>
                <td><span>{{$sim->created_at}}</span></td>
                <td>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$sim->id}}">
                    Edit
                    </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$sim->id}}">
                        Delete
                        </button>
                </td>
            </tr>



             {{-- edit model --}}
             @include('sections.simcard.editmodel' )


             {{-- delete model --}}
             @include('sections.simcard.deletemodel')



            @endforeach

        </tbody>
    </table>
</div>
