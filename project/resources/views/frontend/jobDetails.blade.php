@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ About Banner  Start================================== -->

<section style="padding: 30px 0">
    <div class="breadcumb" style="background:#CDDEED; padding:50px 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="text">
                        <h2>How MyBuilder works</h2>
                        <p class="w-75">Posting a job on MyBuilder is simple and free. Just tell us what you need, and our clever match-making process will help you choose the right person for your job with confidence.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/shareLove.large.svg') }}" class="img-responsive w-50" alt="About Banner">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container" style="padding: 30px">
    <div class="row ">
        <div class="col-md-12 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/documentWithPencil.large.svg') }}" class="img-responsive " alt="About Banner" style="height:100px; width:100px">
            </div>
            <h4 class="mb-3">Post a job</h4>

            <p class="mb-4">Post your job in a few simple steps. Once your job is on MyBuilder, we'll let you <br> know which tradespeople are interested.</p>

            <p> <i class="fas fa-info-circle"></i> Add pictures to your job post for accurate quotes. </p>

        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/communication-with-background.svg') }}" class="img-responsive " alt="About Banner" style="height:100px; width:100px">
            </div>
            <h4 class="mb-3">See who's interested</h4>

            <p class="mb-4">After you post a job, our matching system identifies and alerts relevant <br> tradespeople, who can then express interest in your job.</p>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/spQualityChecks.large.svg') }}" class="img-responsive " alt="About Banner" style="height:100px; width:100px">
            </div>
            <h4 class="mb-3">See who's interested</h4>

            <p class="mb-4">After you post a job, our matching system identifies and alerts relevant <br> tradespeople, who can then express interest in your job.</p>
        </div>
    </div>

    <div class="row mt-5 p-4" style="background: #CDDEED">
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

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/renovations.large.svg') }}" class="img-responsive " alt="About Banner" style="height:100px; width:100px">
            </div>
            <h4 class="mb-3">Getting the job done</h4>

            <p class="mb-4">Once you've agreed on terms, pricing and timings, your tradesperson will get to work.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div class="img mb-3">
                <img src="{{ asset('assets/images/spReviews.large.svg') }}" class="img-responsive " alt="About Banner" style="height:100px; width:100px">
            </div>
            <h4 class="mb-3">Review your experience</h4>

            <p class="mb-4">After your job is complete, you can give leave a review based on your experience. Our review system ensures that tradespeople are rewarded for good work and held accountable for any problems.</p>
        </div>
    </div>

</div>

<!-- ============================ About Banner End ================================== -->

@endsection

@push('js')

@endpush
