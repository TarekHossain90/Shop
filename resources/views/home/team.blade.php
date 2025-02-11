<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Team
        </h2>
        <p>
          Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris
          iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
        </p>
      </div>
      <div class="row">
        @foreach($data as $data)
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="team/{{$data->image}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
              {{$data->name}}
              </h5>
              <h6 class="">
              {{$data->description}}
              </h6>

              <h6>${{$data->price}}</h6>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
