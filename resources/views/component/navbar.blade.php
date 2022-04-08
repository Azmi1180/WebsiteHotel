
{{-- <div class="navbar">
    <nav>
        <div class="nav-wrapper">
            <div class="left-wrapper">
                <div class="logo-wrapper">
                    <img src="" alt="" srcset="">
                </div>
            </div>
            <div class="right-wrapper">
                <ul>
                    <li>Lmao</li>
                </ul>
            </div>
        </div>
    </nav>
</div>     --}}

<!--  Third Navbar -->

<style>
    * {
    margin : 0;
    text-decoration: none;
    /* color: black */
    font-family:'Segoe UI';
    font-weight: 600;
  }

  a{

  }

  nav {

    text-decoration: none;
    border : solid 1px black;
    height : 30%;
    width: 100%;
    /* position: fixed; */


  }

  .navbar{
    z-index: 9;
    /* background-color: aqua; */
    background: #009b9654;
    padding: 5vh;
    position: fixed;
    width: 100%;
    backdrop-filter: blur(10px);
    box-sizing: border-box;
    transition: 300ms ease;
    /* margin: 10px 20px */
  }

  .nav-wrapper {
  /*   background-color : red; */
    margin: 0px 10px;
    display: flex;
    justify-content: space-between;
  }



  .right-wrapper {
    gap: 5px;
    display: flex;
    align-items: center;
  }

  .logo-wrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
  }

  .logo-wrapper-img {
    /* width: 161px; */
    width: 21vh;
  }

  .nav-li {
    margin: 0px 10px;
  }

  .nav-li > .navlist {
    /* background-color: yellow; */
    padding: 4.4vh 1rem;
    height: 100%;
    color: white;
  }

  .nav-li > .navlist-btn {
    color: white;
    background: #20AFAC;
    border-radius: 50px;
    padding: 2vh
  }

  .navlist:active{
    outline: none;
}

</style>
{{-- <div class="navbar-third">
    <ul>
      <h3 class="logo">Logo</h3>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>
      <div class="dropdown">
      <button class="dropbtn">Dropdown
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      <li><a href="#">Home</a></li>
    </ul>
  </div> --}}


  <div id="navbar" class="navbar">
    <div class="nav-wrapper">
      <div class="left-wrapper">
        <div class="logo-wrapper">
          <img class="logo-wrapper-img" src="{{ asset('img/logo_101.png') }}" alt="" srcset="">
          {{-- <h1>Logo</h1> --}}
        </div>
      </div>
      <div class="right-wrapper">
          {{-- <div>Home</div>
          <div>About</div>
          <div>Kamar</div>
          <div>Fasilitas</div> --}}
          <div class="nav-li">
            <a href="/" class="navlist">Home</a>
          </div>
          <div class="nav-li">
            <a href="/#tentang" class="navlist">Tentang</a>
          </div>
          <div class="nav-li">
            <a href="/#fasilitas" class="navlist">Fasilitas</a>
          </div>
          <div class="nav-li">
            <a href="/kamar" class="navlist">Kamar</a>
          </div>
          <div class="nav-li btn btn-primary">
            <a href="/form/book/0" class="navlist-btn">Book Now</a>
          </div>
      </div>
    </div>
  </div>


@section('script')

  <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementByClass("navbar").style.padding = "2vh 3vh";
        document.getElementByClass("navbar").style.background = "#00000075";
        document.getElementByClass("logo-wrapper-img").style = "25px";
      } else {
        document.getElementByClass("navbar").style.padding = "3vh";
        document.getElementByClass("logo").style.fontSize = "35px";
      }
    }

  </script>

@endsection
