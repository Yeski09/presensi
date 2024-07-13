@extends('layouts.user_type.auth')

@section('content')
    <div>
        {{-- <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature! Click <strong>
            <a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank" class="text-white">here</a></strong>
            to see the PRO product!
        </span>
    </div> --}}

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Create Roles</h5>
                            </div>
                            {{-- <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New
                                Attendance</a> --}}
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="ct-example" style="position: relative;border: 2px solid #f5f7ff !important;border-bottom: none !important;padding: 1rem 1rem 2rem 1rem;margin-bottom: -1.25rem;">
                            <form action="{{ route('role.store') }}" method="POST">
                                @csrf
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="input name" onfocus="focused(this)" onfocusout="defocused(this)" name="name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <input type="submit" class="form-control">
                                    </div>
                                  </div>
                              </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
