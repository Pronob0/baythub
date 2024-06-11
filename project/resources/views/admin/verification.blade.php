@extends('layouts.admin')

@section('title')
@lang('All Verification Request')
@endsection

@section('breadcrumb')
<section class="section">
    <div class="section-header">
        <h1> @lang('ALl Verification Request')</h1>
    </div>
</section>

@endsection

@section('content')

<div class="container-xl">
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th>@lang('User')</th>
                                <th>@lang('Telephone')</th>
                                <th>@lang('Status')</th>
                                <th>@lang('Action')</th>
                               

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $item)
                            <tr>
                               
                                <td>

                                    <a href="{{route('admin.user.details',$item->user_id)}}">{{$item->user->name}}</a>



                                </td>
                                <td data-label="@lang('Telephone')">
                                    {{__($item->telephone)}}
                                </td>

                                <td data-label="@lang('Status')">
                                    @if($item->status == 0)
                                    <span class="badge badge-warning">@lang('Pending')</span>
                                    @elseif($item->status == 1)
                                    <span class="badge badge-success">@lang('Approved')</span>
                                    @else
                                    <span class="badge badge-danger">@lang('Rejected')</span>
                                    @endif
                                </td>

                                <td data-label="@lang('Action')">

                                    {{-- view details   --}}
                                    <a href="{{route('admin.verification.details',$item->id)}}" class="btn btn-primary btn-sm" title="@lang('Details')">
                                        <i class="fa fa-desktop"></i>
                                    </a>

                                    @if($item->status == 0)
                                    <a href="{{route('admin.verification.status',['id1'=>$item->id, 'id2'=>1])}}" class="btn btn-success btn-sm" title="@lang('Approve')">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a href="javascript:;" data-href="{{route('admin.verification.status',['id1'=>$item->id, 'id2'=>2])}}" id="rejecte" class="btn btn-danger btn-sm" title="@lang('Reject')">
                                        <i class="fa fa-times"></i>
                                    </a>

                                    @else
                                    
                                    @endif
                                </td>
                               

                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="12">@lang('No data found!')</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($users->hasPages())
                <div class="card-footer">
                    {{$users->links('admin.partials.paginate')}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- reject modal open with reject reason   --}}
<div class="modal fade" id="reason" tabindex="-1" role="dialog" aria-labelledby="reason" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="get">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('Reject Reason')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea name="reject_reason" id="reject_reason" class="form-control" cols="30" rows="10"
                        placeholder="@lang('Write Reason')" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">@lang('Close')</button>
                    <button type="submit" class="btn btn-danger">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>

                    



@endsection


@push('script')

<script>
    'use strict';
   
        $('#rejecte').on('click', function () {
           
            var modal = $('#reason');
            var url = $(this).data('href');
            modal.find('form').attr('action', url);
            modal.modal('show');
        });
</script>
 


@endpush