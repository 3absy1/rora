              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$recharagecard->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit {{$recharagecard->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('recharagecards.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Name </label>
                                        <input type="text" class="form-control" name="name" value="{{$recharagecard->name}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$recharagecard->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Minutes</label>
                                        <input type="text" class="form-control" name="minutes" value="{{$recharagecard->minutes}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Price</label>
                                        <input type="text" class="form-control" name="price" value="{{$recharagecard->price}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Amount</label>
                                        <input type="text" class="form-control" name="amount" value="{{$recharagecard->amount}}"required>
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
