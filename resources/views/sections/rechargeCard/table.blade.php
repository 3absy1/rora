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
                <th>Minutes</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($recharagecards as $recharagecard)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$recharagecard->id}}</td>
                <td>{{$recharagecard->name}}</td>
                <td>{{$recharagecard->minutes}}</td>
                <td>{{$recharagecard->price}}</td>
                <td>{{$recharagecard->amount}}</td>
                <td><span>{{$recharagecard->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$recharagecard->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$recharagecard->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

                     {{-- edit model --}}
                     @include('sections.rechargeCard.editmodel')

                     {{-- delete model --}}
                     @include('sections.rechargeCard.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
