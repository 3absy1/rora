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
                <th>Title</th>
                <th>Minutes</th>
                <th>Price</th>
                <th>Is Active</th>
                <th>Sale</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($plans as $plan)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$plan->id}}</td>
                <td>{{$plan->title}}</td>
                <td>{{$plan->minutes}}</td>
                <td>{{$plan->price}}</td>
                <td>{{$plan->is_active}}</td>
                <td>{{$plan->sale_price}}</td>
                <td><span>{{$plan->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$plan->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$plan->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

             {{-- edit model --}}
             @include('sections.plan.editmodel' )


             {{-- delete model --}}
             @include('sections.plan.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
