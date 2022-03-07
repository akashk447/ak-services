@if(isset($whyus))
@foreach ($whyus as $whyus )
  <section id="why-us" class="why-us">
    <div class="container">
    
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch" >
          <div class="content">
            <h3>Why Choose Bethany for your company website?</h3>
            <p style="text-align: justify">
             {{$whyus->why_us_desc}}
            </p>
            <div class="text-center">
              <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch" >
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>{{$whyus->w1_heading}}</h4>
                  <p>{{$whyus->w1_desc}}</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch" >
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>{{$whyus->w2_heading}}</h4>
                  <p>{{$whyus->w2_desc}}</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch" >
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>{{$whyus->w3_heading}}</h4>
                  <p>{{$whyus->w3_desc}}</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->
      @endforeach
     
      @endif
