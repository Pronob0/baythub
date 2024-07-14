@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ About Banner  Start================================== -->




<div class="container" style="padding: 30px">
    <div class="text-center mb-5 w-50 mx-auto">
        

        <h2>How it works</h2>
        <p class="">Find a tradesman in your area with our quick and easy online connection service. It's free and only takes a minute!</p>
    </div>
    <div class="row ">
        <div class="col-md-6 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/job-1.png') }}" class="img-responsive " alt="About Banner" style="height:200px; width:200px">
            </div>
            <h4 class="mb-3">Step 1</h4>

            <p class="mb-4">Post your job in a few simple steps. Once your job is on MyBuilder, we'll let you know which tradespeople are interested.</p>

            

        </div>
        
        <div class="col-md-6 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/job-2.png') }}" class="img-responsive " alt="About Banner" style="height:200px; width:200px">
            </div>
            <h4 class="mb-3">Step 2</h4>

            <p class="mb-4">After you post a job, our matching system identifies and alerts relevant <br> tradespeople, who can then express interest in your job.</p>

        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/job-3.png') }}" class="img-responsive " alt="About Banner" style="height:200px; width:200px">
            </div>
            <h4 class="mb-3">Step 3</h4>

            <p class="mb-4">Once you've agreed on terms, pricing and timings, your tradesperson will get to work.</p>
        </div>
        
        <div class="col-md-6 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/job-4.png') }}" class="img-responsive " alt="About Banner" style="height:200px; width:200px">
            </div>
            <h4 class="mb-3">Step 4</h4>

            <p class="mb-4">After your job is complete, you can give leave a review based on your experience. Our review system ensures that tradespeople are rewarded for good work and held accountable for any problems.</p>
        </div>
    </div>

    



   

    <div class=" mt-5 p-4" style="background: #CDDEED">
        <h2 class="text-center mb-5"> Tips</h2>
        <div class="row">
            <div class="col-md-4">
            <h4><i class="fas fa-envelope"></i> View quotes</h4>
            <p>Once you have interest from tradespeople, you can view their profiles and <br> invite them to quote on your job.</p>

        </div>

        <div class="col-md-4">
            <h4><i class="fas fa-pound-sign"></i> Review pricing</h4>
            <p>To help you choose a builder within your budget, our tradespeople usually provide an estimated cost based on the amount of work and materials needed.</p>
        </div>

        <div class="col-md-4">
            <h4><i class="fas fa-pound-sign"></i> Review pricing</h4>
            <p>To help you choose a builder within your budget, our tradespeople usually provide an estimated cost based on the amount of work and materials needed.</p>
        </div>
            
        </div>
        
    </div>

    

</div>

<!-- ============================ About Banner End ================================== -->

@endsection

@push('js')

@endpush
