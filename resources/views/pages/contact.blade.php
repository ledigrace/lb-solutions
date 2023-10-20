@extends('layouts.app')

@section('title')
    LB SOLUTIONS | CONTACT US PAGE
@endsection

@section('content')


<section class="location">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
      <h1>LOCATION</h1>
    </div>
      <div class="col-md-6">
      <h1>CALL US: 09178623894</h1>
    </div>
    </div>
  <div class="col-md-12 background-location">
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=azure residences paranaque&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div>
  </div>
</section>


  <!-- contact us-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <h1>CONTACT US</h1>

        <div class="container">
          <div class="row">
          </div>
          <div class="row">
              <h4 style="text-align:center">We'd love to hear from you!</h4>
          </div>
          <div class="row input-container">
              <div class="col-xs-12">
                <div class="styled-input wide">
                  <input type="text" required />
                  <label>Name</label> 
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                  <input type="text" required />
                  <label>Email</label> 
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                  <input type="text" required />
                  <label>Phone Number</label> 
                </div>
              </div>
              <div class="col-xs-12">
                <div class="styled-input wide">
                  <textarea required></textarea>
                  <label>Message</label>
                </div>
              </div>
              <div class="col-xs-12 text-center">
                <button class="read-btn mx-auto">SEND MESSAGE<i class="bi bi-arrow-right"></i></button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- end of contact us -->


@endsection