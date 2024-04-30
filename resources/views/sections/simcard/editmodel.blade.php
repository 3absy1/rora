              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$sim->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit Sim Card</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('simscard.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{$sim->phone_number}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$sim->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Is Active</label>
                                        <input type="text" class="form-control" name="is_active" value="{{$sim->is_active}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$sim->id}}">
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
