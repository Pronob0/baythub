@extends('layouts.front')

@push('css')
<style>

</style>

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
                <div class="dashboard-widg-bar d-block">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="_dashboard_content bg-white rounded mb-4">
    
                                <div class="_dashboard_content_body">
                                    <!-- Convershion -->
                                    <div class="messages-container margin-top-0">
                                        
    
                                        <div class="messages-container-inner">
                                            
                                            <!-- Messages -->
                                            <div class="dash-msg-inbox">
                                                <ul>
                                                    @foreach ($tickets as $key => $data)
                                                        <li class="{{ request()->query('ticket') == $data->id ? 'active-message' : '' }}">
                                                            
                                                                <div class="message-by">
                                                                    <a href="{{ route('user.message',['ticket'=>$data->id]) }}">
                                                                    <div class="message-by-headline">
                                                                        <h5>{{ $data->ticket_number }}</h5>
                                                                        <span>{{ $data->created_at->diffForHumans() }}</span>
                                                                    </div>
                                                                    {{-- username  --}}
                                                                    <span>{{ $data->user->name }}</span>
                                                                </a>
                                                                <a style="margin-top:-45px; color: #FF9409" href="{{ route('user.details',$data->user->id) }}"> <small>more info >>></small></a>
                                                                </div>
                                                            
                                                            
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- Messages / End -->
    
                                            <!-- Message Content -->
                                            <div class="dash-msg-content">

                                                @if (request()->query('ticket'))
                                                @if (count($messages)>0)
                                                
                                                    @foreach($messages as $key => $data)
                                                        @if($data->user_id == auth()->user()->id)
                                                        
                                                            <div class="message-plunch">
                                                                <div class="dash-msg-avatar"><img src="{{ getPhoto(auth()->user()->photo) }}" alt=""></div>
                                                                <div class="dash-msg-text">
                                                                    <p>{{ $data->messages }}
                                                                        <br>
                                                                        
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @else
    @php
        $use= App\Models\User::where('id',$data->user_id)->first();
    @endphp
                                                        <div class="message-plunch me">
                                                            <div class="dash-msg-avatar"><img src="{{ getPhoto($use->photo) }}" alt=""></div>
                                                            <div class="dash-msg-text">
                                                                <p>{{ $data->messages }}
                                                                    <br>
                                                                 
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <h3>@lang('No Message Found')</h3>
                                                @endif
                                                <div class="clearfix"></div>
                                                    <div class="message-reply">
                                                        <form action="{{ route('user.message.reply',$ticket->id) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <textarea cols="40" rows="3" name="messages" class="form-control with-light" placeholder="@lang('Your Message')"></textarea>
                                                            <button type="submit" class="btn theme-bg text-white">@lang('Send Message')</button>
                                                        </form>
                                                    </div>
                                                @endif
                                                    <!-- Reply Area -->
                                                    
    
                                            </div>
                                            <!-- Message Content -->
    
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->

@endsection

@push('js')

<script>
     
</script>

@endpush