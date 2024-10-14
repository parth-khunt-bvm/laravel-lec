@extends('layout.app')
@section('page-wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Assest List</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="{{ route('admin.asset.asset-type.add') }}" class="btn btn-primary px-5">Add Assest</a>
                        </div>
                    </div>
                </div>

                @if (session('success'))
                <br>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- <h6 class="mb-0 text-uppercase">Assest List</h6> --}}
                <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Assest Type</th>
                                    <th scope="col">Short Code</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asset_type as $keys=>$value)
                                    <tr>
                                        <td scope="row">{{ $keys+1 }}</td>
                                        <td>{{ $value['type'] }}</td>
                                        <td>{{ $value['short_code'] }}</td>
                                        <td>
                                            @if($value['status'] == 'A')
                                                <span class="badge bg-primary">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.asset.asset-type.update', $value['asset_types_id'])}}" class="btn btn-outline-primary">
                                                <i class="bx bx-pen me-0"></i>
                                            </a>

                                            <a href="{{ route('admin.asset.asset-type.delete', $value['asset_types_id'])}}" class="btn btn-outline-danger">
                                                <i class="bx bx-trash me-0"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endsection
