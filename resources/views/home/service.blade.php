<section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
          Our Services
        </h2>
        <p class="col-lg-8 px-0">
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        </p>
      </div>
      <div class="service_container">
        <div class="carousel-wrap ">
          <div class="service_owl-carousel owl-carousel">

          @foreach($gallary as $gallary)
            <div class="item">
              <div class="box ">
                <div>
                  <img src="/gallary/{{$gallary->image}}" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Home Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>