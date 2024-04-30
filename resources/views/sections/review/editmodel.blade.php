              {{-- edit model --}}
              <div class="modal fade" id="updateModalgrid{{$review->id}}" tabindex="-1" aria-labelledby="updateModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalgridLabel">Edit {{$review->client->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('reviews.update','test') }} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">

                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Rate</label>
                                        <input type="text" class="form-control" name="rate" value="{{$review->rate}}"required>
                                        <input type="hidden" class="form-control" name="id" value="{{$review->id}}">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Message</label>
                                        <input type="text" class="form-control" name="message" value="{{$review->message}}"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> subject</label>
                                        <input type="text" class="form-control" name="subject" value="{{$review->subject}}"required>
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
