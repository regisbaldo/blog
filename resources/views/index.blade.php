@extends('layouts.base')

@section('content')
<section id="intro">
      <div class="intro-text">
        <h2>Bem-vindo a Uniblog!</h2>
        <p>O blog do curso de Laravel</p>
      </div>

      <div class="product-screens">
        <div
          class="product-screen-1 wow fadeInUp"
          data-wow-delay="0.4s"
          data-wow-duration="0.6s"
        >
          <img src="{{asset('blog/img/product-screen-1.png')}}" alt="" />
        </div>

        <div
          class="product-screen-2 wow fadeInUp"
          data-wow-delay="0.2s"
          data-wow-duration="0.6s"
        >
          <img src="{{asset('blog/img/product-screen-1.png')}}" alt="" />
        </div>

        <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
          <img src="{{asset('blog/img/product-screen-1.png')}}" alt="" />
        </div>
      </div>
    </section>

    <main id="main">
      <section id="about" class="section-bg">
        <div class="container-fluid">
          <div class="section-header">
            <h3 class="section-title">Sobre</h3>
            <span class="section-divider"></span>
            <p class="section-description">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque<br />
              sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6 about-img wow fadeInLeft">
              <img src="{{asset('blog/img/about-img.jpg')}}" alt="" />
            </div>

            <div class="col-lg-6 content wow fadeInRight">
              <h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elite storium
                paralate
              </h2>
              <h3>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>

              <ul>
                <li>
                  <i class="ion-android-checkmark-circle"></i> Ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.
                </li>
                <li>
                  <i class="ion-android-checkmark-circle"></i> Duis aute irure
                  dolor in reprehenderit in voluptate velit.
                </li>
                <li>
                  <i class="ion-android-checkmark-circle"></i> Ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate trideta storacalaperda mastiro
                  dolore eu fugiat nulla pariatur.
                </li>
              </ul>

              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum Libero justo laoreet sit amet cursus
                sit amet dictum sit. Commodo sed egestas egestas fringilla
                phasellus faucibus scelerisque eleifend donec
              </p>
            </div>
          </div>
        </div>
      </section>
  
      <section id="features">
        <div class="container">
          <div class="section-header">
            <h3 class="section-title">Posts</h3>
            <span class="section-divider"></span>
          </div>
        </div>
      </section>
      <section id="advanced-features">
        <div class="features-row section-bg">
          <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                  

              <div class="col-12">
                <img
                  class="advanced-feature-img-right wow fadeInRight"
              src="{{url($post->photo)}}"
                  alt=""
                />
                <div class="wow fadeInLeft">
                  <h2>
                      {{$post->title}}
                  </h2>
                  <h3>
                  <p>
                    {{$post->description}}
                  </p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </section>
    </main>
@endsection