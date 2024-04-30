              {{-- edit model --}}
              <div class="modal fade" id="createModalgrid" tabindex="-1" aria-labelledby="createModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalgridLabel">Create Plan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('plan.create') }} " method="GET">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Minutes</label>
                                        <input type="text" class="form-control" name="minutes" placeholder="minutes"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="price"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Sale</label>
                                        <input type="text" class="form-control" name="sale_price" placeholder="sale"required>
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
