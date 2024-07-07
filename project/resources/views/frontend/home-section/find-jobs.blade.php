<section class="border-warning text-black-50" style="">
    <div class="container text-center" style="border-radius:50px; background:#f5f1f1; padding:30px; border:1px solid #ff5201">

      <div class="row mb-4">
         <div class="col text-center">
             <div class="sec-heading center">
                 <h2 style="color:#00A7FF">Get Your Desire Jobs</h2>
                 <p>Find Trusted Tradespeople Effortlessly</p>
             </div>
         </div>
     </div>
        <!-- Three columns of text below the carousel -->
        <div class="row m-auto">
           <div class="col-lg-4">
              <img class="mb-3" src="{{ asset('assets/images/step-1.png') }}" alt="Generic placeholder image" width="160" height="160">
              <h2 style="color:#ff5201">Step 1</h2>
              <p>Donec sed odio dui. Etiam porta.</p>
             
           </div>
           <!-- /.col-lg-4 -->
           <div class="col-lg-4">
              <img class=" mb-3" src="{{ asset('assets/images/step-2.png') }}" alt="Generic placeholder image" width="160" height="160">
              <h2 style="color:#ff5201">Step 2</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat.</p>
              
           </div>
           <!-- /.col-lg-4 -->
           <div class="col-lg-4">
              <img class="mb-3" src="{{ asset('assets/images/step-3.png') }}" alt="Generic placeholder image" width="160" height="160">
              <h2 style="color: #ff5201">Step 3</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac.</p>
              
           </div>
        </div>

        <div class="para w-50 mx-auto text-justify">
         <p class="text-center" style="color:#00A7FF; font-weight:600">Explore how BaytHub can simplify your search for tradespeople and connect you with local experts. Discover the benefits and features that make finding the right professionals for your home projectseasier than ever.</p>
        </div>

        {{-- Read More button in the middle  --}}
         <div class="row mt-5">
               <div class="col text-center">
                  <a href="{{ route('job.details') }}" class="btn btn-warning">How it works</a>
               </div>
         </div>

        
     </div>

</section>


