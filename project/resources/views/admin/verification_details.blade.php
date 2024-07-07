@extends('layouts.admin')

@section('title')
@lang('Verification Details')
@endsection

@section('breadcrumb')
<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1> @lang('Verification Details')</h1>
        {{-- back button  --}}
        <div class="section-header-button">
            <a href="{{ route('admin.user.verification') }}" class="btn btn-primary btn-icon icon-left"> <i
                    class="fas fa-arrow-left"></i> @lang('Back')</a>
        </div>
    </div>
</section>

@endsection

@section('content')

<div class="container-xl">
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card p-4">

                {{-- verification two image show  --}}
                <div class="d-flex">
                    <div class="p-4">
                        <label for=""> Criminal Record </label>
                        <img src="{{getPhoto($verify->criminal_record)}}" alt="image 1" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <label for="">Passport/NID/Driving License </label>
                        <img src="{{getPhoto($verify->id_image)}}" alt="image 2" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        {{-- telephone  --}}
                        <div class="form-group">
                            <label for="">@lang('Telephone')</label>
                            <input type="text" class="form-control" readonly value="{{$verify->telephone}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-8">
                       {{-- description  --}}
                        <div class="form-group">
                            <label for="">@lang('Description')</label>
                            <textarea class="form-control" readonly>{{$verify->qualification}}</textarea>
                        </div>
                        
                      </div>
                </div>


                
            </div>
        </div>
    </div>
</div>




@endsection


@push('script')

@endpush