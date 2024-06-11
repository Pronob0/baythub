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
                        <h4>@lang('My Wishlist')</h4>
                    </div>
                    
                    <div class="row">
                    
                       <table class="table table-striped">
                        <thead class="">
                            <tr>
                                <th>@lang('Title')</th>
                                <th>@lang('Property Or JOb')</th>
                                <th>@lang('Actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($wishlists as $item)
                            <tr>
                                <td> <a class="text-primary" href="{{ route('advertise.details',$item->advert->id) }}">{{ $item->advert->title }}</a> </td>
                                <td>
                                    @if($item->is_job == 0)
                                    <span class="badge badge-success">@lang('Property')</span>
                                    @else
                                    <span class="badge badge-primary">@lang('Job')</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('user.wishlist.delete', $item->id) }}" class="btn btn-danger btn-sm" title="Remove"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                              <td class="text-center" colspan="12">@lang('No data found!')</td>
                            </tr>
                            @endforelse
                          </tbody>
                       
                       </table>
                        
                       @if ($wishlists->hasPages())
                        <div class="card-footer">
                        {{$wishlists->links('admin.partials.paginate')}}
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



@endsection

@push('js')



@endpush