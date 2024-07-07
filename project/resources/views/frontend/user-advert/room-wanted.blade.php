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
                        
                        <small class=""><i class="fa-solid fa-money-bill"></i> {{ $currency->sign }}{{ $item->budget }}</small>
                    </div>
                    <div class="listing-card-info-icon">
                        
                        <small class=""><i class="fa-solid fa-square"></i> {{ $item->room_sizes==0 ? 'A single Room' : 'Double Room' }}</small>
                        
                    </div>
                    
                    <div class="listing-card-info-icon">
                        
                        <small class=""><i class="fa-solid fa-house-chimney-user"></i> {{ $item->accomodation_for }}</small>
                         
                    </div>
                    <div class="listing-card-info-icon">
                        
                        <small class=""><i class="fa-solid fa-calendar-days"></i> {{ $item->move_from }}</small>
                    </div>
                </div> 
                
                <div class="property_links w-100">
                <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
            </div>
            </div>
            
        </div>

</div>