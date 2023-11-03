<nav class="d-flex justify-content-between m-4" style="position: absolute;z-index:1000; left:0px; right:0px;">
    <div class="kiri">
        <h5 style="padding-top:10px;">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-white" style="padding:10px;text-shadow: 2px 2px 4px #000000; ">SPESIAL DEAL</a>
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-white" style="padding:10px;text-shadow: 2px 2px 4px #000000; ">SHOP</a>
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-white" style="padding:10px;text-shadow: 2px 2px 4px #000000; ">ABOUT</a>
        </h5>
    </div>
    <div class="tengah text-white" style="padding-right: 200px">
        <h2 style="text-shadow: 2px 2px 4px #000000;"> <b>E B L I E T H O S</b> </h2>
        <span style="font-size: 1.8rem;padding-left:10px;text-shadow: 2px 2px 4px #000000; " > I N D O N E S I A</span>
    </div>
    <form action="{{route('logout')}}" method="POST">
    <div class="kanan padding-top:10px; ">
        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff; padding-right:15px;text-shadow: 2px 2px 4px #000000;"></i>
            @csrf
            @method('DELETE')
            <button type="submit" style="border:none; background:none;">
                <i class="fa-solid fa-user" style="color: #ffffff; padding-right:15px;text-shadow: 2px 2px 4px #000000;" onclick="return confirm('Yakin logout')"></i>
            </button>
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff; padding-right:15px;text-shadow: 2px 2px 4px #000000;"></i>
        </div>
    </form>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" style="position: relative">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="{!! asset('component/bg.png') !!}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{!! asset('component/bg.png') !!}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{!! asset('component/bg.png') !!}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


