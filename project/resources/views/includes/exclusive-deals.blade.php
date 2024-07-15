
<style>
   .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 51px;

}
.select2-container--default .select2-selection--single {
    height: 57px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 51px;
}
</style>
<div class="search-header-banner">
    <div class="container">
       <div class="full-search-2 transparent mt-3">
          <h2 class="text-center mb-5">Exclusive Deals</h2>
          <div class="hero-search-content">
             <form action="{{ route('browse.advert',['slug'=>$category->slug, 'type'=>'post']) }}" method="get">
                <div class="row">
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="form-group">
                         <div class="input-with-icon">
                            <select id="cities" class="form-control" name="subcategory">
                               <option value="">@lang('Select Type')</option>
                               @foreach($subs as $sub)
                               <option value="{{ $sub->id }}">{{ $sub->name=='Sales'? 'Purchase': 'Rent' }}</option>
                               @endforeach
                            </select>
                            <i class="ti-briefcase"></i>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                     <select class="js-example-basic-single" name="city_id">
                        <option value="">Select a Region</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="form-group">
                         <div class="input-with-icon">
                            <select id="cities" class="form-control" name="strategy">
                               <option value="">@lang('Select Strategy')</option>
                               <option value="BTL">BTL</option>
                               <option value="FLIP">FLIP</option>
                               <option value="HMO">HMO</option>
                               <option value="Service Accommodation">Service Accommodation</option>
                               <option value="Housing Association">Housing Association</option>
                               <option value="SLT">SLT</option>
                            </select>
                            <i class="ti-briefcase"></i>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="form-group">
                         <div class="input-with-icon">
                            <select id="cities" class="form-control" name="property_type">
                               <option value="">@lang('Property Type')</option>
                               <option value="Terrance House">Terrance House</option>
                               <option value="Semi Detached House">Semi Detached House</option>
                               <option value="Detached House">Detached House</option>
                               <option value="Apartment">Apartment</option>
                               <option value="Block Apartment">Block Apartment</option>
                               <option value="Bungalow">Bungalow</option>
                            </select>
                            <i class="ti-briefcase"></i>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row d-flex justify-content-between">
                   <div class="col-lg-3 col-md-3 col-sm-6">
                      <div class="form-group">
                         <button type="submit" class="btn btn-theme-light w-100">@lang('Search')</button>
                      </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
 <!-- =========================== All Property =============================== -->
 
 <section>
    <div class="container">
       <div class="row">
          @foreach ($items as $item)
          <div class="col-lg-4 col-md-6">
             <div class="single-items">
                <div class="property-listing property-2">
                   <div class="listing-img-wrapper">
                      <div class="list-img-slide">
                         <div class="click">
                            @php
                            $photo = explode(',',$item->photo);
                            $wishlist = DB::table('wishlists')->where('advert_id',$item->id)->where('user_id',Auth::id())->first();
                            @endphp
                            <div><img src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" class="img-fluid mx-auto" alt="" />
                              <div class="listing-like-top heart" data-id="{{ $item->id }}">
                                  <i class="fa-regular fa-heart {{ $wishlist ? 'active' : ' ' }}"></i>
                              </div>
                          </div>
                         </div>
                      </div>
                      <!--<span class="property-type">{{ $item->subcategory->name }}</span>-->
                      <div class="d-flex justify-content-between">
                         <span class="property-type">@lang('Exclusive Deal')</span>
                         <span class="property-typee">@lang('For') {{ $item->subcategory->name }}</span>
                      </div>
                   </div>
                   <div class="listing-detail-wrapper pb-0">
                      <div class="listing-short-detail">
                         <h4 class="listing-name text-uppercase"><a class="text-warning" href="{{ route('advertise.details',$item->id) }}"> <b><i class="fa-solid fa-location-dot"></i> </b> {{ $item->city->name }}, {{ $item->town->town }}</a></h4>
                      </div>
                   </div>
                   <div class="price-features-wrapper">
                      <div class="list-fx-features">
                         <div class="listing-card-info-icon">
                            <small class=""><i class="fa-solid fa-house"></i> {{ $item->property_type }} </small>
                         </div>
                         <div class="listing-card-info-icon">
                            <small class=""><i class="fa-solid fa-location-dot"></i> {{ $item->town->town }}</small>
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
          </div>
          @endforeach
       </div>
       {{-- custom pagination link  --}}
       <div class="row">
          <div class="col-md-12">
             <div class="d-flex justify-content-center">
                {{ $items->links('paginate') }}
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- =========================== All Property =============================== -->