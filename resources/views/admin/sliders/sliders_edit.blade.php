@extends('admin.admin-layouts.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Sliders </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sliders</h4>
                    <a href="{{ route('sliders') }}" class="btn btn-success btn-rounded btn-fw">View Sliders</a>
                    {{-- <p class="card-description"> Basic form elements </p> --}}
                    <form class="forms-sample" action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                      @method('put')
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$slider->name}}" required>
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        {{-- <input type="file" name="image" class="file-upload-default"> --}}
                        <div class="input-group col-xs-12">
                          <input type="file" class="file-upload-browse btn btn-primary" placeholder="Upload Image" name="image">
                          {{-- <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span> --}}
                        </div>
                        <img src="{{ asset('uploads/admin/sliders/'.$slider->image) }}" alt="{{$slider->name}}" width="100px" height="100px">
                      </div>
                      
                        <div class="form-group">
                        <label for="exampleSelectSta">Status</label>
                        <select class="form-control" id="exampleSelectStatus" name="status" required>
                          <option value="">Select Status</option>
                          <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Active</option>
                          <option value="0" {{ $slider->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                      </div>
                      <input type="submit" value="Submit" class="btn btn-primary mr-2">
                      <input type="reset" value="Cancel" class="btn btn-dark">
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->
      @endsection