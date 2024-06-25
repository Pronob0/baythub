<div class="col-lg-4 col-md-6">

    <div class="property-listing property-2" style="height: 255px; margin-top:0px">
        
        <div class="listing-detail-wrapper pb-0">
            <div class="listing-short-detail">
                <h4 class="listing-name"><a href="{{ route('advertise.details',$item->id) }}">  {{ $item->title }}</a></h4>
                
            </div>
        </div>
        <span class="badge badge-primary mx-3">{{ $item->category->name }}</span>
        
        <div class="price-features-wrapper">
            
            <div class="list-fx-features">
                <div class="listing-card-info-icon">
                   <small class=""><i class="fa-solid fa-house"></i> {{ $item->property_type }} </small>
                </div>
                <div class="listing-card-info-icon">
                   <small class=""><i class="fa-solid fa-location-dot"></i> {{$item->region}}</small>
                </div>
                @php
                $cost = json_decode($item->cost,true);
                @endphp
                <div class="listing-card-info-icon">
                   <small class=""> <i class="fa-solid fa-money-bill"></i> {{ $currency->sign }}{{ $cost['potential_rent']  }}</small>
                </div>
                <div class="listing-card-info-icon">
                   <small class=""><i class="fa-solid fa-bed"></i> {{ $item->bedroom }} Beds</small>
                </div>
             </div>
            
            <div class="property_links w-100">
            <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
        </div>
        </div>
        
    </div>

</div>