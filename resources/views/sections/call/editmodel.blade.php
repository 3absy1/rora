              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$call->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit Call</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('calls.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                {{-- <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Client</label>
                                        <input type="text" class="form-control" name="name" value="{{$call->client->name}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$call->id}}">
                                    </div>
                                </div> --}}

                                {{-- <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">Sim Card</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{$call->simcards->phone_number}}">
                                    </div>
                                </div> --}}
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">User 1</label>
                                        <input type="text" class="form-control" name="user1" value="{{$call->user1}} "required>
                                        <input type="hidden" class="form-control" name="id" value="{{$call->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">User 2</label>
                                        <input type="text" class="form-control" name="user2" value="{{$call->user2}} "required >
                                    </div>
                                </div>
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="lastName" class="form-label">Call Ended</label>
                                            <input type="text" class="form-control" name="call_ended" value="{{$call->call_ended}}">
                                        </div>

                                    </div>
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="lastName" class="form-label">Duration</label>
                                            <input type="text" class="form-control"  name="duration" value="{{$call->duration}}">
                                        </div>
                                    </div>
                                <!--end col-->
                                <button type="submit" class="btn btn-success">submit</button>
                            </div><!--end row-->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
