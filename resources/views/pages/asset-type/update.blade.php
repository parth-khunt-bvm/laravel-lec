@extends('layout.app')

@section('page-wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Update Asset</h6>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card">
                    <div class="card-body">
                        <!-- Laravel Form for Update with POST method -->
                        <form action="{{ route('admin.asset.asset-type.update-asset-type') }}" method="POST">
                            @csrf

                            <!-- Type -->
                            <div class="mb-3">
                                <label class="form-label">Type:</label>
                                <input type="hidden" name="asset_types_id" class="form-control" value="{{ old('asset_types_id', $assestDetails->asset_types_id) }}" placeholder="Enter asset type">
                                <input type="text" name="type" class="form-control" value="{{ old('type', $assestDetails->type) }}" placeholder="Enter asset type">
                                @error('type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Short Code -->
                            <div class="mb-3">
                                <label class="form-label">Short Code:</label>
                                <input type="text" name="short_code" class="form-control" value="{{ old('short_code', $assestDetails->short_code) }}" placeholder="Enter short code">
                                @error('short_code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label">Status:</label>
                                <select name="status" class="form-control">
                                    <option value="A" {{ old('status', $assestDetails->status) == 'A' ? 'selected' : '' }}>Active</option>
                                    <option value="I" {{ old('status', $assestDetails->status) == 'I' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Asset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection
