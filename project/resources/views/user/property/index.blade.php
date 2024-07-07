@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <h2 class="ipt-title">Welcome!</h2>
                <span class="ipn-subtitle">Welcome To Your Account</span>
                
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->
<!-- ============================ User Dashboard ================================== -->
<section>
    <div class="container-fluid">
        <div class="row">
            
            @include('user.partials.sidebar-user')
            
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-wraper">
                
                    <!-- Bookmark Property -->
                    <div class="form-submit">	
                        <h4>@lang('My Property')</h4>
                    </div>
                    
                    <div class="row">
                    
                       <table class="table table-striped">
                        <thead class="">
                            <tr>
                                <th>@lang('Title')</th>
                                <th>@lang('Category')</th>
                               
                                <th>@lang('property Type')</th>
                                <th>@lang('Featured')</th>
                                <th>@lang('Actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($advertisements as $item)
                            <tr>
                              <td data-label="@lang('Title')">{{$item->title}}</td>
                              <td data-label="@lang('Category')">{{__($item->category->name)}}</td>
                             
                              <td data-label="@lang('Property type')">
                                {{__($item->property_type)}}
                              </td>

                                <td data-label="@lang('Featured')">
                                    @if($item->is_featured == 1)
                                    <span class="badge badge-success">@lang('Yes')</span>
                                    @else
                                    <a id="feature_modal" data="{{ $item->id }}" class="badge badge-success" href="javascript:;">feature it</a>
                                    
                                    @endif
                                </td>
              
                              <td data-label="@lang('Actions')">
                                <a target="__blank" href="{{ route('advertise.details',$item->id) }}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-eye"></i></a>

                                    <a href="{{ route('user.property.edit',$item->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    
                                    <a href="javascript:;" data-href="{{ route('user.property.delete',$item->id) }}" class="btn btn-sm btn-danger" data-toggle="modal"
                                    data-target="#deleteModal"><i class="fa fa-trash"></i></a>
                              </td>
              
                            </tr>
                            @empty
                            <tr>
                              <td class="text-center" colspan="12">@lang('No data found!')</td>
                            </tr>
                            @endforelse
                          </tbody>
                       
                       </table>
                        
                       @if ($advertisements->hasPages())
                        <div class="card-footer">
                        {{$advertisements->links('admin.partials.paginate')}}
                        </div>
                        @endif
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->


<!-- ============================ Delete Modal ================================== -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteForm">
            @csrf
            @method('delete')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal">@lang('Delete Confirmation')!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body
                ">
                    <p>@lang('Are you sure you want to delete this?')</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    <button type="submit" class="btn btn-sm btn-danger">@lang('Delete')</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- feature modal  --}}

<div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="featureModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('user.property.feature') }}" method="POST" id="featureForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featureModal">@lang('Feature Confirmation')!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="type" value="property">
                <div class="modal-body">
                    <div class="row">
                        
                            <label for="fdays">@lang(' Days')</label>
                            <input type="number" readonly class="form-control" value="7" name="days">
                       
                    </div>

                    <div class="row mt-3">
                        
                            <label for="famount">@lang('Amount in GBP')</label>
                            <input type="text" name="amount" readonly class="form-control"  id="famount" value="4"> 
                        
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    <button type="submit" class="btn btn-sm btn-success">@lang('Feature')</button>
                </div>
            </div>
        </form>
    </div>
</div>








<!-- ============================ Delete Modal ================================== -->

@endsection

@push('js')
<script>
    'use strict'
    $(document).ready(function () {
        //delete modal
        $('#deleteModal').on('show.bs.modal', function (e) {
            var link = $(e.relatedTarget).data('href');
            $('#deleteForm').attr('action', link);
        });
    });

    $(document).on('click', '#feature_modal', function () {
        var id = $(this).attr('data');
        $('#id').val(id);
        $('#featureModal').modal('show');
    });
</script>


@endpush