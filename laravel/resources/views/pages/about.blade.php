@extends('layout1')

@section('seoTitle')
    About Us
@endsection

@section('content')
    <section style="padding: 200px 200px;
      display: block;">
      <div class="container">
        <div class="row">
          <div class="col">
            <img id=featured src="../images/prod_4.webp" alt="slide_prod1">
            <div id="slide-wrapper">
              <img id="slideLeft" class="arrow" src="../images/arr_left.png" alt="left_arrow">
              <div id="slider">
                <img class="thumbnail active" src="../images/prod_2.webp" alt="slide_prod2">
                <img class="thumbnail" src="../images/prod_3.webp" alt="slide_prod3">
                <img class="thumbnail" src="../images/prod_4.webp" alt="slide_prod4">
                <img class="thumbnail" src="../images/prod_5.webp" alt="slide_prod5">
                <img class="thumbnail" src="../images/prod_6.webp" alt="slide_prod6">
                <img class="thumbnail" src="../images/prod_1.webp" alt="slide_prod7">
                <img class="thumbnail" src="../images/prod_2.webp" alt="slide_prod8">
              </div>
              <img id="slideRight" class="arrow" src="../images/arr-right.png" alt="right_arrow">
            </div>
          </div>
          <div class="col">
            <h1>About us</h1>
            <hr>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur illo, sunt quidem dolorum ea tempore
              in vitae,
              iure eveniet amet ex molestias id tempora laudantium, dignissimos mollitia debitis eligendi ipsum.
              Error, eveniet at possimus, et quos quasi quisquam rem blanditiis quae magnam totam? Beatae eius saepe
              ratione
              exercitationem, repudiandae odit impedit voluptatem, quis dolores natus inventore ex animi possimus
              laudantium.
              Vero iste unde suscipit animi iusto eaque dolorum eius dolores earum quia, perspiciatis excepturi deleniti
              ut
              tenetur vel voluptatibus? Et beatae dignissimos iste autem aspernatur in placeat cupiditate repellendus
              quaerat?
              Magni tempora non est sapiente cum minima accusantium veniam laudantium nobis, quisquam culpa, reiciendis
              pariatur
              repudiandae fuga saepe? Ad soluta magni vero eum doloribus alias at cum esse ipsam facilis!
              Velit repellat exercitationem vitae laudantium fugit cupiditate sapiente.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-5 ">
      <h2 class="about-title featured-text text-center">Meet Our Team</h2>
      <div class="container ">
        <div class="row">
          <div class="text-right">
            <a class="btn  mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#3e6866"
                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path
                  d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
              </svg>
            </a>
            <a class="btn  mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#3e6866"
                class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path
                  d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
              </svg>
            </a>
          </div>
          <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row text-dark">
                    <div class="col ">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_1.webp" class="card-img-top" alt="team1">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_2.webp" class="card-img-top" alt="team2">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_3.webp" class="card-img-top" alt="team3">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row text-dark">
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_4.webp" class="card-img-top" alt="team4">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_5.webp" class="card-img-top" alt="team5">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_6.webp" class="card-img-top" alt="team6">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row text-dark">
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_7.webp" class="card-img-top" alt="team7">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_8.webp" class="card-img-top" alt="team8">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/team_9.webp" class="card-img-top" alt="team9">
                        <div class="card-body">
                          <div class="col">
                            <div class="mt-3">
                              <h5 class="card-title text-center">John Doe </h5>
                            </div>
                          </div>
                          <p class="title text-center">Art Decor</p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                              <path
                                d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                            </svg>
                            exaple@email.com
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                              <path
                                d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z" />
                            </svg>
                            + 675 45-87-32-54
                          </p>
                          <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3e6866"
                              class="bi bi-linkedin" viewBox="0 0 16 16">
                              <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a href="https://www.linkedin.com">John Doe </a>
                          </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')
    let activeImages = document.getElementsByClassName('active')
    for (var i = 0; i < thumbnails.length; i++) {
      thumbnails[i].addEventListener('mouseover', function () {
        console.log(activeImages)
        if (activeImages.length > 0) {
          activeImages[0].classList.remove('active')
        }
        this.classList.add('active')
        document.getElementById('featured').src = this.src
      })
    }
    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');
    buttonLeft.addEventListener('click', function () {
      document.getElementById('slider').scrollLeft -= 180
    })
    buttonRight.addEventListener('click', function () {
      document.getElementById('slider').scrollLeft += 180
    })
  </script>
@endsection
