              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$order->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit {{$order->client->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('orders.update','test') }} " method="POST">
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
                                        <input type="text" class="form-control" name="plan_id" value="{{$order->plan->title}}"required>
                                        <input type="hidden" class="form-control" name="plan" value="{{$order->plan_id}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$order->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Is Paid</label>
                                        <input type="text" class="form-control" name="is_paid" value="{{$order->is_paid}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Total Price</label>
                                        <input type="text" class="form-control" name="total_price" value="{{$order->total_price}}"required>
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
