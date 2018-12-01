
@section('bar-content')
  <div  class="">
    <div class="ui secondary  ui blue  inverted menu fixed">
        <div class="header item" id="Logo">
          <img  src="img/logo_graduation.png" id="iconLogo" alt="Logo de Excellence learning" title="Excellence Learning"/>
          <a href="">Excellence Learning
        </div>
      <a class="item
                @if ($home == true)
                  active
                @endif"
       href="home">
        Home
      </a>
      <a class="item
                @if ($courses == true)
                  active
                @endif"
       href="courses">
        Courses
      </a>
      <a class="item
                @if ($enroll == true)
                  active
                @endif"
      href="enroll">
        Enroll My son
      </a>
      <a class="item" href="#">
          Status of my son
      </a>
      <a class="item
                @if ($about == true)
                  active
                @endif"
      href="about">
          About
      </a>
    </div>
  </div>
  @endsection


