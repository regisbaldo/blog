@extends('layouts.base')

@section('content')
<main id="main">
      <section id="introC">
        <div class="container">
          <div class="section-header">
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

        </div>
      </section>
    </main>
@endsection