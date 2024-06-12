<div class="col-md-4">
    <div class="property_item heading_space">
        <div class="price clearfix">
            <div class="type">
                <h5>{{ $item->category->name }}</h5>
            </div>
            <div class="pl-3">
                <h4 class="text-success">{{ $item->price }} {{ $item->currency }}</h4>
            </div>
        </div>
        <div class="proerty_content">
            <div class="proerty_text">
                <h3 class="captlize"><a href="{{ route('user.advert.show', $item->id) }}">{{ $item->title }}</a></h3>
                <p>{{ $item->address }}</p>
            </div>
            <div class="property_meta transparent"> 
                <span><i class="icon-select-an-objecto-tool"></i>{{ $item->size }} sqft</span> 
                <span><i class="icon-bed"></i>{{ $item->bedroom }} Bedroom</span> 
                <span><i class="icon-safety-shower"></i>{{ $item->bathroom }} Bathroom</span>   
            </div>
        </div>
    </div>

</div>