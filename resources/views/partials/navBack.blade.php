<div class="sidebar1 fixed-top">
  <div class="logo mt-5">
    <a  href={{ route('home') }}><img src={{ asset('img/logo.png') }} alt=""></a>
  </div>
    <ul>
      <li>
        <a href={{ route('dashboard') }}><i class="fab fa-accusoft"></i> 
          Dashboard</a>
      </li>
      <li>
        <a href={{ route('navbars.index') }}><i class="fas fa-align-justify"></i>Navbar</a>
      </li>
      <li>
        <a href={{ route('carousselItems.index') }}><i class="fas fa-images"></i>Caroussel</a>
      </li>
      <li>
        <a href={{ route('cards.index') }}><i class="fas fa-cart-plus"></i>Carte Service</a>
      </li>
      <li>
        <a href={{ route('titres.index') }} ><i class="fab fa-adversal"></i> Titre</a>
      </li>
      <li>
        <a  href={{ route('aboutContents.index') }}><i class="fas fa-home"></i>About</a>
      </li>
      <li>
        <a  href={{ route('heroes.index') }}><i class="fas fa-home"></i>Hero</a>
      </li>
      <li>
        <a href={{ route('services.index') }}><i class="fas fa-cart-plus"></i>Services</a>
      </li>
      <li>
        <a  href={{ route('contacts.index') }}><i class="fas fa-phone-square"></i>Contact</a>
      </li>
      <li>
        <a href={{ route('posts.index') }} ><i class="fab fa-accusoft"></i>Post</a>
      </li>  
      <li>
        <a href={{ route('testimonials.index') }} ><i class="fab fa-accusoft"></i>Testimonial</a>
      </li>  
  
      @auth
      <li>
          <a class="nav-link scrollto " href="/"> Bonjour {{Auth::user()->name }}</a>
      </li>
      @endauth
      @auth 
        <li>
            <form class="inline" action={{ route('logout') }} method="POST">
            @csrf
            <a onclick="event.preventDefault(); this.closest('form').submit();" type="submit" class="nav-link scrollto" href="{{ route('logout')}}">Logout</a>
            </form>
        </li>
    @endauth
    </ul>
</div>





