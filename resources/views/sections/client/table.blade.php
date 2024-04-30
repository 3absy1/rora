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
                <th>Email</th>
                <th>Phone</th>
                <th> Reseller</th>
                <th>Minutes</th>
                <th>Ads Count</th>
                <th>Ads Minutes</th>
                <th>Create At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->is_reseller}}</td>
                <td>{{$client->minutes}}</td>
                <td>{{$client->ads_count}}</td>
                <td><span class="badge bg-info-subtle text-info">{{$client->ads_minutes}}</span></td>
                <td><span>{{$client->created_at}}</span></td>
                <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$client->id}}">
                Edit
                </button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$client->id}}">
                    Delete
                    </button>
                </td>
            </tr>

                    {{-- edit model --}}
                    @include('sections.client.editmodel' )


                    {{-- delete model --}}
                    @include('sections.client.deletemodel')

                        @endforeach
                    </div>
                </div>
            </div>

        </tbody>
    </table>
