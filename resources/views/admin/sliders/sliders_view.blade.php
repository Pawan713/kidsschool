@extends('admin.admin-layouts.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Sliders</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sliders</h4>
                    {{-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> --}}
                   <a href="{{ route('sliders.create') }}" class="btn btn-success btn-rounded btn-fw">Add Sliders</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th> Slider Name</th>
                            <th> Status</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($sliders->count()>0)
                          @foreach($sliders as $slider)
                          <tr>
                            <td class="py-1">
                              <img src="{{ asset('uploads/admin/sliders/'.$slider->image) }}" alt="image" />
                            </td>
                            <td> {{ $slider->name }} </td>
                            <td> {{($slider->status==1)?'Active':'Inactive'}} </td>
                            <td class="py-1">
                                <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('sliders.destroy',$slider->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                  {{-- <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                              <button type="button" class="btn btn-danger btn-sm">Delete</button> --}}
                             </td>
                          </tr>
                          @endforeach
                         @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection