@extends('layout.app')
@section('page-wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Brand List</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="{{route('admin.brand-data.add-brand')}}" class="btn btn-primary px-5">Add brand</a>
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
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Brand Code</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
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
