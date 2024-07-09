@php
    $bedsize = json_decode($item->bed_sizes);
    $bedprice = json_decode($item->bed_prices);
@endphp


@if(isset($bedsize->onebed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 1</h6>
    </div>
    <div id="bed1-fields">
        <div class="row bed-field" id="bed1-1">
            @foreach (array_combine($bedsize->onebed,$bedprice->onebed)  as $size=>$price)
            <div class="form-group col-md-5">
                <label>1 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="1bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>1 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="1bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach
            
           @if (isset($bedsize->onebed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="1">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
            
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 1</h6>
    </div>
    <div id="bed1-fields">
        <div class="row bed-field" id="bed1-1">
            <div class="form-group col-md-5">
                <label>1 Bed Size</label>
                <input type="number" class="form-control" name="1bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>1 Bed Price</label>
                <input type="number" class="form-control" name="1bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="1">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Bed 2 -->
@if(isset($bedsize->twobed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 2</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed2-1">
            @foreach (array_combine($bedsize->twobed, $bedprice->twobed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>2 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="2bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>2 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="2bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            
            @if (isset($bedsize->twobed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="2">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 2</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed2-1">
            <div class="form-group col-md-5">
                <label>2 Bed Size</label>
                <input type="number" class="form-control" name="2bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>2 Bed Price</label>
                <input type="number" class="form-control" name="2bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="2">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Repeat for Beds 3 to 7 -->

<!-- Bed 3 -->

@if(isset($bedsize->threebed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 3</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed3-1">
            @foreach (array_combine($bedsize->threebed, $bedprice->threebed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>3 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="3bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>3 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="3bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            @if (isset($bedsize->threebed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="3">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>

@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 3</h6>
    </div>
    <div id="bed3-fields">
        <div class="row bed-field" id="bed3-1">
            <div class="form-group col-md-5">
                <label>3 Bed Size</label>
                <input type="number" class="form-control" name="3bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>3 Bed Price</label>
                <input type="number" class="form-control" name="3bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="3">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Bed 4 -->

@if(isset($bedsize->fourbed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 4</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed4-1">
            @foreach (array_combine($bedsize->fourbed, $bedprice->fourbed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>4 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="4bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>4 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="4bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            @if (isset($bedsize->fourbed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="4">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 4</h6>
    </div>
    <div id="bed4-fields">
        <div class="row bed-field" id="bed4-1">
            <div class="form-group col-md-5">
                <label>4 Bed Size</label>
                <input type="number" class="form-control" name="4bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>4 Bed Price</label>
                <input type="number" class="form-control" name="4bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="4">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Bed 5 -->

@if(isset($bedsize->fivebed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 5</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed5-1">
            @foreach (array_combine($bedsize->fivebed, $bedprice->fivebed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>5 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="5bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>5 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="5bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            @if (isset($bedsize->fivebed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="5">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 5</h6>
    </div>
    <div id="bed5-fields">
        <div class="row bed-field" id="bed5-1">
            <div class="form-group col-md-5">
                <label>5 Bed Size</label>
                <input type="number" class="form-control" name="5bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>5 Bed Price</label>
                <input type="number" class="form-control" name="5bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="5">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Bed 6 -->
@if(isset($bedsize->sixbed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 6</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed6-1">
            @foreach (array_combine($bedsize->sixbed, $bedprice->sixbed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>6 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="6bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>6 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="6bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            @if (isset($bedsize->sixbed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="6">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 6</h6>
    </div>
    <div id="bed6-fields">
        <div class="row bed-field" id="bed6-1">
            <div class="form-group col-md-5">
                <label>6 Bed Size</label>
                <input type="number" class="form-control" name="6bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>6 Bed Price</label>
                <input type="number" class="form-control" name="6bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="6">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Bed 7 -->
@if(isset($bedsize->sevenbed))
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 7</h6>
    </div>
    <div id="bed2-fields">
        <div class="row bed-field" id="bed7-1">
            @foreach (array_combine($bedsize->sevenbed,$bedprice->sevenbed) as $size=>$price)
            <div class="form-group col-md-5">
                <label>7 Bed Size</label>
                <input type="number" class="form-control" value="{{ $size }}" name="7bed_size[]" placeholder="Bed Size in sqft">
            </div>

            <div class="form-group col-md-5">
                <label>7 Bed Price</label>
                <input type="number" class="form-control" value="{{ $price }}" name="7bed_price[]" placeholder="Bed Price">
            </div>
            @endforeach

            @if (isset($bedsize->sevenbed[0]))
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="7">Add more</a>
                </div>
            @else
            
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                </div>
               
           @endif
        </div>
    </div>
</div>

@else
<div class="col-md-12">
    <div class="head-ta w-100 mb-4">
        <h6>Beds 7</h6>
    </div>
    <div id="bed7-fields">
        <div class="row bed-field" id="bed7-1">
            <div class="form-group col-md-5">
                <label>7 Bed Size</label>
                <input type="number" class="form-control" name="7bed_size[]" placeholder="Bed Size in sqft">
            </div>
            <div class="form-group col-md-5">
                <label>7 Bed Price</label>
                <input type="number" class="form-control" name="7bed_price[]" placeholder="Bed Price">
            </div>
            <div class="col-md-2">
                <a href="javascript:;" class="btn btn-sm btn-primary mt-5 add-more" data-bed="7">Add more</a>
            </div>
        </div>
    </div>
</div>
@endif