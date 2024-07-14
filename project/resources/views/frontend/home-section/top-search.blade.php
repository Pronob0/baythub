<section id="about" class="about" style="">
      <div class="container" style="width: 80%">
          <div class="text-center mb-5">
              <h2>Top Search in UK</h2>
          </div>

          <div class="row d-flex justify-content-between">
            <div class="col-lg-3">
                <div class="top-category mb-3">
                    <h6>Find Tenants</h6>
                </div>

                <div class="city-list">
                    
                    @foreach ($cities as $city)
                        <a class="d-block my-2 text-decoration-underline" href="{{ route('browse.advert.city',['id'=>11, 'type'=>'rent', 'cityid'=>$city->id]) }}">{{ $city->name }}</a>
                    @endforeach
                </div>


            </div>

            <div class="col-lg-3">
                <div class="top-category mb-3">
                    <h6>Exclusive Deals</h6>
                </div>

                <div class="city-list">
                    
                    @foreach ($cities as $city)
                        <a class="d-block my-2 text-decoration-underline" href="{{ route('browse.advert.city',['id'=>12, 'type'=>'post', 'cityid'=>$city->id]) }}">{{ $city->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3">
                <div class="top-category mb-3">
                    <h6>Find Rent</h6>
                </div>

                <div class="city-list">
                    
                    @foreach ($cities as $city)
                        <a class="d-block my-2 text-decoration-underline" href="{{ route('browse.advert.city',['id'=>13, 'type'=>'post', 'cityid'=>$city->id]) }}">{{ $city->name }}</a>
                    @endforeach
                </div>
            </div>


          </div>

        

      </div>
    </section>