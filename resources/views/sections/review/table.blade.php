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
                <th>Rate</th>
                <th>Message</th>
                <th>Subject</th>
                <th>Create At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)

            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                    </div>
                </th>


                <td>{{$review->id}}</td>
                <td>{{$review->client->name}}</td>
                <td>{{$review->rate}}</td>
                <td>{{$review->message}}</td>
                <td>{{$review->subject}}</td>
                <td><span>{{$review->created_at}}</span></td>
                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModalgrid{{$review->id}}">
                        Edit
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModalgrid{{$review->id}}">
                            Delete
                            </button>
                    </td>
            </tr>

               {{-- edit model --}}
               @include('sections.review.editmodel' )


               {{-- delete model --}}
               @include('sections.review.deletemodel')

            @endforeach

        </tbody>
    </table>
</div>
