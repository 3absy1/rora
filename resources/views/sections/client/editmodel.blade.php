              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$client->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit Client</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('clients.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$client->name}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$client->id}}">
                                    </div>
                                </div>

                                <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$client->email}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$client->phone}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="lastName" class="form-label">Mitues</label>
                                        <input type="text" class="form-control" name="minutes" value="{{$client->minutes}}"required>
                                    </div>
                                </div>
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="lastName" class="form-label">Ads Count</label>
                                            <input type="text" class="form-control" name="ads_count" value="{{$client->ads_count}}"required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="lastName" class="form-label">Ads Mintues</label>
                                            <input type="text" class="form-control"  name="ads_minutes" value="{{$client->ads_minutes}}"required>
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
