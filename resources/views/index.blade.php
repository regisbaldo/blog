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
              <div class="col-12">
                <img
                  class="advanced-feature-img-right wow fadeInRight"
                  src="{{asset('blog/img/advanced-feature-1.jpg')}}"
                  alt=""
                />
                <div class="wow fadeInLeft">
                  <h2>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                  </h2>
                  <h3>
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam.
                  </p>
                  <p>
                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est
                    laborum.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-row">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <img
                  class="advanced-feature-img-left"
                  src="{{asset('blog/img/advanced-feature-2.jpg')}}"
                  alt=""
                />
                <div class="wow fadeInRight">
                  <h2>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                  </h2>
                  <i
                    class="ion-ios-paper-outline"
                    class="wow fadeInRight"
                    data-wow-duration="0.5s"
                  ></i>
                  <p class="wow fadeInRight" data-wow-duration="0.5s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam.
                  </p>
                  <i
                    class="ion-ios-color-filter-outline wow fadeInRight"
                    data-wow-delay="0.2s"
                    data-wow-duration="0.5s"
                  ></i>
                  <p
                    class="wow fadeInRight"
                    data-wow-delay="0.2s"
                    data-wow-duration="0.5s"
                  >
                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum.
                  </p>
                  <i
                    class="ion-ios-barcode-outline wow fadeInRight"
                    data-wow-delay="0.4"
                    data-wow-duration="0.5s"
                  ></i>
                  <p
                    class="wow fadeInRight"
                    data-wow-delay="0.4s"
                    data-wow-duration="0.5s"
                  >
                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-row section-bg">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <img
                  class="advanced-feature-img-right wow fadeInRight"
                  src="{{asset('blog/img/advanced-feature-3.jpg')}}"
                  alt=""
                />
                <div class="wow fadeInLeft">
                  <h2>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                  </h2>
                  <h3>
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam
                  </p>
                  <i class="ion-ios-albums-outline"></i>
                  <p>
                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est
                    laborum.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection