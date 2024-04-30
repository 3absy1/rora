              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$subscribtion->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit {{$subscribtion->client->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('subscribtions.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">Avaliable Plans</label>
                                            <select multiple name="plan_id" class="form-control" id="exampleFormControlSelect2">
                                                @foreach($plans as $plan)
                                                    <option  value="{{$plan->id}}">{{$plan->id}}-{{$plan->title}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Plan </label>
                                        <input type="text" class="form-control" name="plan_id" placeholder="Enter the number of plan you want " value="{{$subscribtion->plan->title}}"required>
                                        <input type="hidden" class="form-control" name="plan" value="{{$subscribtion->plan_id}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$subscribtion->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Is Active</label>
                                        <input type="text" class="form-control" name="is_active" value="{{$subscribtion->is_active}}"required>
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
