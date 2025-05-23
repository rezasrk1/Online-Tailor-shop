@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Customers</h3>
<div class="row breadcrumbs-top">
    <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Customers</a>
            </li>
            <li class="breadcrumb-item active">All Customers
            </li>
        </ol>
    </div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Customer'" :target="'#add-customer'" />
@endpush

@section('content')

<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Customers List</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body card-dashboard">
              
                <table class="table table-striped table-bordered dataex-html5-export">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($customers->count()))
                        @foreach ($customers as $customer)
                          <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-id="{{$customer->id}}" class="dropdown-item">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$customer->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        <x-modals.delete :route="'customer.destroy'" :title="'Customer'" />
                    @endif                    
                  </tbody>
                  
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ HTML5 export buttons table -->


<!-- add customer modal starts here -->
<div class="modal wobble text-left" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title text-text-bold-600" id="myModalLabel33">Add Customer</h3>
            <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" action="{{route('buyerregister_submit')}}">
          @csrf
            <div class="modal-body">
            <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"  class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    

            <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit" name="add_customer">
            </div>
        </form>
    </div>
</div>
</div>                    
@endsection


@push('page-js')

@endpush