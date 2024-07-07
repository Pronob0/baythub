<!-- Single Property Start -->
<div class="col-lg-4 col-md-6" >
    <div class="property_item classical-list">
        
        <div class="proerty_content" style="height: 255px">
            
            <div class="listing-detail-wrapper pb-0">
                <div class="listing-short-detail">
                    <h6 class="listing-name"><i class="fa-solid fa-location-dot"></i> {{ $item->location }}  ( {{ $currency->sign }} {{ $item->budget }} )  </h6>
                    
                </div>
            </div>
            <span class="badge badge-primary">{{ $item->category->name }}</span>
            
            <div class="property_meta" style="margin: 0px"> 
              <div class="list-fx-features">
                  <div class="listing-card-info-icon">
                        
                         <small class=""><i class="fa-solid fa-credit-card"></i> {{ $item->buying_for == 'living' ? 'Living' : 'Investment' }}</small>
                    </div>
                  <div class="listing-card-info-icon" >
                        
                        
                        <small class=""><i class="fa-solid fa-building"></i> {{ $item->property_type == null ? 'Land' : $item->property_type }} </small>
                        
                    </div>
                
                    <div class="listing-card-info-icon">
                        
                        <small class=""><i class="fa-solid fa-bed"></i> {{ $item->bedroom==null ? 0 : $item->bedroom }} Beds</small>
                        
                    </div>

                    <div class="listing-card-info-icon">
                        <small class=""><i class="fa-solid fa-coins"></i> {{ $item->buyer_type }}</small>
                       
                    </div>
                </div>  
            </div>
            <div class="property_links">
                <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
            </div>
        </div>
    </div>
</div>
<!-- Single Property End -->