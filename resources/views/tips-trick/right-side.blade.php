<?php
$tag = '<p class="text-primary">.text-primary</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-success">.text-success</p>
<p class="text-danger">.text-danger</p>
<p class="text-warning">.text-warning</p>
<p class="text-info">.text-info</p>
<p class="text-light bg-dark">.text-light</p>
<p class="text-dark">.text-dark</p>
<p class="text-muted">.text-muted</p>
<p class="text-white bg-dark">.text-white</p>';

?>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0 font-weight-bold">Core Php [Advanced]</h3>
          <p>Last Updated On 02-Feb-2022</p>
        </div>
        <div class="col-sm-6">
          <div class="d-flex align-items-center justify-content-md-end">
            <div class="mb-3 mb-xl-0 pr-1">
                <div class="dropdown">
                  <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                    <h6 class="dropdown-header">Last 14 days</h6>
                    <a class="dropdown-item" href="#">Last 21 days</a>
                    <a class="dropdown-item" href="#">Last 28 days</a>
                  </div>
                </div>
            </div>
            <div class="pr-1 mb-3 mr-2 mb-xl-0">
              <a href="{{route('homepage')}}"><button type="button" class="btn btn-sm bg-white btn-icon-text border">Back to Homepage</button></a>
            </div>
            
          </div>
        </div>
      </div>
      <hr>
      <div class="row  mt-3">
          {{-- loop wil start here  --}}
        <div class="col-md-12 bg-primary mt-1" >
            <h4 style="" class="p-3 " >Questions will be here</h4>
        </div>
        
        <div class="col-md-12 bg-primary mt-1" >
            <h4 style="" class="p-3">Description</h4>
            <h5 style="" class="p-3"><pre>{{ $tag }}</pre></h5>
            
        </div>
        
        {{-- loop will end here --}}
      </div>
      
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.ak-webservices.com/" target="_blank">AK Services</a> 2022</span>
        
      </div>
    </footer>
    <!-- partial -->
  </div>
