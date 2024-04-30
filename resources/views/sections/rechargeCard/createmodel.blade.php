              {{-- edit model --}}
              <div class="modal fade" id="createModalgrid" tabindex="-1" aria-labelledby="createModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalgridLabel">Create Recharage Card </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- start form  --}}
                        <form action="{{ route('recharagecards.create') }} " method="GET">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="example:gambo"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Minutes</label>
                                        <input type="text" class="form-control" name="minutes" placeholder="example:2000"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="example:200"required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div>
                                        <label for="firstName" class="form-label"> Amount</label>
                                        <input type="text" class="form-control" name="amount" placeholder="example:4"required>
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
