              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$plan->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit {{$plan->title}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('plan.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$plan->title}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$plan->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Minutes</label>
                                        <input type="text" class="form-control" name="minutes" value="{{$plan->minutes}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Price</label>
                                        <input type="text" class="form-control" name="price" value="{{$plan->price}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Is Active</label>
                                        <input type="text" class="form-control" name="is_active" value="{{$plan->is_active}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Sale</label>
                                        <input type="text" class="form-control" name="sale_price" value="{{$plan->sale_price}}"required>
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
