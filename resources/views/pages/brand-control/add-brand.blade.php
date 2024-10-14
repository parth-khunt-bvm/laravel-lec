@extends('layout.app')

@section('page-wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Add Asset</h6>
                        </div> 
                    </div>
                </div>

                <hr>

                <div class="card">
                    <div class="card-body">
                        <!-- Laravel Form with POST method -->
                        <form action="{{route('admin.brand-data.storebrand')}}" method="POST" id="add-brand">
                            @csrf 

                            <!-- Type -->
                            <div class="mb-3">
                                <label class="form-label">Brand:</label>
                                <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand') }}" placeholder="Enter asset type">
                                
                            </div>

                            <!-- Short Code -->
                            <div class="mb-3">
                                <label class="form-label">Brand Code:</label>
                                <input type="text" name="brand_code" id="brand_code" class="form-control" value="{{ old('brand_code') }}" placeholder="Enter short code">
                               
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label">Status:</label>
                                <select name="status" class="form-control">
                                    <option value="" id="select-status" >Select Status</option>
                                    <option value="A" id="active" {{ old('status') == 'A' ? 'selected' : '' }}>Active</option>
                                    <option value="I"  id="inactive" {{ old('status') == 'I' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Add Asset</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection
