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
                <th>Name</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($paymentMethods as $paymentMethod)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$paymentMethod->id}}</td>
                <td>{{$paymentMethod->name}}</td>
                <td><span>{{$paymentMethod->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$paymentMethod->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$paymentMethod->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

                {{-- edit model --}}
                @include('sections.paymentMethod.editmodel' )


                {{-- delete model --}}
                @include('sections.paymentMethod.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
