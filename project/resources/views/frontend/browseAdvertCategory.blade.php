@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Hero Banner  Start================================== -->

<!-- ============================ Hero Banner End ================================== -->

@if ($category->id==11)

@if ($type=='buy')
@include('includes.property-wanted')

@elseif($type=='rent')
@include('includes.room-wanted')
@endif

    
@endif

@if ($category->id==12)
@include('includes.exclusive-deals')
@endif

@if ($category->id==13)
@include('includes.room-rent')
@endif

@if ($category->id==14)
@include('includes.buy')
@endif

@endsection

@push('js')

<script>
    $('.heart').click(function(){
        var id = $(this).data('id');
        // get method use 
       

        $.get("{{ url('user/wishlist') }}/"+id, function(data){

            console.log(data);
            if(data.status == 'success'){
                toastr.success(data.message);
                $(this).find('i').addClass('active')


            }else{
                toastr.error(data.message);
            }
            
        });

       
    });
</script>

@endpush