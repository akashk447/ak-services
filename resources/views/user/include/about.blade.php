<section id="about" class="about">
    <div class="container">
      @foreach ($about as $about )
      <div class="row content">
        <div class="col-lg-6" >
          <h2>{{$about->title}}</h2>
          <h3>{{$about->short_desc}}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" >
          <p>
            {{$about->long_desc}}
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> {{$about->f1}}</li>
            <li><i class="ri-check-double-line"></i> {{$about->f2}}</li>
            <li><i class="ri-check-double-line"></i> {{$about->f3}}</li>
          </ul>
          <p class="fst-italic">
            {{$about->notes}}
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </section>


   
