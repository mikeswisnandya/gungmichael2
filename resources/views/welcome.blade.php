<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8" />
    <title>Michael Swisnandya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jpreloader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <link
      id="colors"
      href="{{ asset('css/colors/scheme-01.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <div id="wrapper">
      <div id="btn-exit">
        <div class="line-1"></div>

        <div class="line-2"></div>
      </div>

      <div class="transition"></div>

      <!-- header begin -->

      <header class="transparent">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex justify-content-between">
                <div class="align-self-center header-col-left">
                  <!-- logo begin -->

                  <div id="logo">
                    <a href="index.html"> Michael Swisnandya </a>
                  </div>

                  <!-- logo close -->
                </div>

                <div class="align-self-center ml-auto header-col-mid">
                  <!-- mainmenu begin -->
                  <ul id="mainmenu" class="scrollnav">
                    @auth()
                    <li><a href="#section-resume">Resume</a></li>
                    <li></li>
                    <li><a href="#section-about">About Me</a></li>
                    <li></li>
                    <li><a href="#section-portfolio">Portfolio</a></li>
                    <li></li>
                    <li><a href="#section-blog">Blog</a></li>
                    <li></li>
                    <li><a href="#section-contact">Contact</a></li>
                        <li></li>
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        <li></li>
                    @else
                        <li><a href="#section-resume">Resume</a></li>
                        <li></li>
                        <li><a href="#section-about">About Me</a></li>
                        <li></li>
                        <li><a href="#section-portfolio">Portfolio</a></li>
                        <li></li>
                        <li><a href="#section-blog">Blog</a></li>
                        <li></li>
                        <li><a href="#section-contact">Contact</a></li>
                        <li></li>
                        <li class="submenu">
                            <a href="#">Login / Register</a>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </li>
                    @endauth
                  </ul>

                  <!-- mainmenu close -->
                </div>

                <div class="align-self-center ml-auto header-col-right">
                  <div class="social-icons s-border sm-hide">
                    <a href="https://www.facebook.com/gungmichael"
                      ><i class="fa fa-facebook fa-lg"></i
                    ></a>

                    <a href="https://www.twitter.com/mikeswisnandya"
                      ><i class="fa fa-twitter fa-lg"></i
                    ></a>

                    <a href="https://www.linkedin.com/in/gungmichael"
                      ><i class="fa fa-linkedin fa-lg"></i
                    ></a>

                    <a href="https://www.instagram.com/gungmichael"
                      ><i class="fa fa-instagram fa-lg"></i
                    ></a>
                  </div>

                  <span id="menu-btn"></span>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- header close -->

      <!-- content begin -->

      <div class="no-bottom no-top dark">
        <div id="top"></div>

        <!-- section begin -->

        <section
          id="section-main"
          class="vertical-center text-light"
          data-bgimage="url({{ asset('images/background/mike_menubg.jpg') }}) top"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h1 class="wow fadeInRight" data-wow-delay=".4s">
                  I'm

                  <b
                    ><span class="id-2color">I Gusti Agung</span> Michael
                    Swisnandya</b
                  >
                </h1>

                <p class="lead wow fadeInRight" data-wow-delay=".5s">
                  I Gusti Agung Michael Swisnandya is a bachelor student at
                  Universitas Pendidikan Ganesha, Singaraja Bali in Informatics
                  Education Study Programme, who is enthusiastic about PC
                  building, photography and videography.
                </p>

                <div class="spacer-single"></div>

                <a
                  href="https://drive.google.com/file/d/1tJ7JngLToZ84XTf_MrG3xS_LYFx9lDX2/view?usp=drive_link"
                  class="btn-custom light wow fadeInRight scoll-to"
                  target="_blank"
                  data-wow-delay=".6s"
                  >Download CV</a
                >
                <a
                  href="https://link.gungmichael.my.id/kamekobali"
                  class="btn-custom light wow fadeInRight scoll-to"
                  target="_blank"
                  data-wow-delay=".6s"
                  >All Cosplayers Photos</a
                >
              </div>
            </div>
          </div>
        </section>

        <!-- section close -->

        <!-- section begin -->

        <section id="section-resume" class="dark">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 wow fadeInRight">
                <h4 class="title">Let See This Below</h4>

                <h2 class="title">My Resume</h2>

                <div class="title-underline"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 wow fadeInRight" data-wow-delay=".25s">
                <h3 class="s_border">Education</h3>

                <ul class="d_timeline">
                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Jun 2021 - now</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Bachelor of Education<span
                          >Universitas Pendidikan Ganesha</span
                        ></span
                      >Currently I am studying at the Ganesha University of
                      Education taking the Informatics Education study program,
                      with a scientific interest in multimedia such as graphic
                      design, photography, videography, and currently studying
                      Augmented Reality.
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Jun 2018 - Jun 2021</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Vocational High School<span
                          >SMK Negeri 1 Denpasar</span
                        ></span
                      >Previously, I studied at SMK Negeri 1 Denpasar by taking
                      Multimedia skills competencies in the scientific interests
                      of graphic design, photography, videography, and 3D
                      animation.
                    </p>
                  </li>
                </ul>
              </div>

              <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <h3 class="s_border">Internship Experiences</h3>

                <ul class="d_timeline">
                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Oct 2020 - Jan 2021</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Videographer &amp; Motion Graphic<span
                          >Balipuspanews.com</span
                        ></span
                      >I was joined Balipuspanews.com for 4 months to help
                      produce educational content in support of government
                      programs to educate the public regarding COVID-19 in the
                      form of video talk shows with relevant stakeholders and
                      making motion graphics for the general public.
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Jan 2020 - Mar 2020</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Intern Video Editor<span>Gusde Photography</span></span
                      >In my second internship program, I did an internship at
                      Gusde Photography as a video editor for The Light Motion
                      sub-business. My job is to make an after movie in the form
                      of a long duration video of a client's wedding.
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Oct 2019 - Des 2019</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Intern Graphic Designer<span>Tribun Bali</span></span
                      >In the first internship program, I did an internship at
                      Tribun Bali as a graphic designer. My job is to create
                      some post content or illustrations to post on social
                      media.
                    </p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
              <h3 class="s_border">Certification</h3>

              <ul class="d_timeline">
                <li class="d_timeline-item">
                  <h3 class="d_timeline-title">July 2023</h3>

                  <p class="d_timeline-text">
                    <span class="d_title">Adobe Certified Professional</span
                    >Certified in Visual Design using Adobe Photoshop<br /><br />
                    <a
                      href="https://www.credly.com/badges/b4e11f15-10f5-4645-b741-a5918709a3ec/linked_in_profile"
                      class="btn-custom light wow fadeInRight scoll-to mt-10"
                      target="_blank"
                      data-wow-delay=".6s"
                      >Show Credentials</a
                    >
                  </p>
                </li>
              </ul>
            </div>

            <div class="row">
              <div class="col-md-6 wow fadeInRight" data-wow-delay=".25s">
                <h3 class="s_border">Organization</h3>

                <ul class="d_timeline">
                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Apr 2023 - now</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Journalistic Sub Division Coordinator<span
                          >HMJ Teknik Informatika</span
                        ></span
                      >In charge of coordinating the process of making news
                      regarding activities in the informatics engineering
                      department, besides that, he is tasked with helping
                      brainstorm innovative content.
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Apr 2022 - Apr 2023</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Student Coordinator of Informatics Education<span
                          >HMJ Teknik Informatika</span
                        ></span
                      >As a connector of information and communication between
                      students, lecturers, and organizations. Manage student
                      administration and study program social media.
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">Apr 2022 - Apr 2023</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Member of Technology and Publication Division<span
                          >UKM Pers Mahasiswa "VISI"</span
                        ></span
                      >In charge of creating and disseminating information on
                      social media and student press community websites.
                    </p>
                  </li>
                </ul>
              </div>

              <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <h3 class="s_border">Volunteering</h3>

                <ul class="d_timeline">
                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">June 2023</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Technical Division<span
                          >Relawan TIK Provinsi Bali</span
                        ></span
                      >Technical support in the socialization of digital
                      literacy in Vocational Schools throughout Buleleng Regency
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">September 2022</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Student Representative<span
                          >Universitas Pendidikan Ganesha</span
                        ></span
                      >Informatics Education Study Programme Student
                      Representative at AQAS International Accreditation 2022
                    </p>
                  </li>

                  <li class="d_timeline-item">
                    <h3 class="d_timeline-title">May 2022 - Jan 2023</h3>

                    <p class="d_timeline-text">
                      <span class="d_title"
                        >Videographer & Editor<span
                          >Universitas Pendidikan Ganesha</span
                        ></span
                      >Video Editing, Taking Video, Virtual Tours, Making
                      Banners in AQAS International Accreditation
                    </p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="spacer-50"></div>

            <div class="row">
              <div class="col-md-6">
                <h3 class="s_border">Multimedia Skills</h3>

                <div class="skill-bar">
                  <h5>Graphic Design</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="80%"></div>
                  </div>
                </div>

                <div class="skill-bar">
                  <h5>Photography</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="90%"></div>
                  </div>
                </div>

                <div class="skill-bar">
                  <h5>Videography</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="80%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <h3 class="s_border">Other Skills</h3>

                <div class="skill-bar">
                  <h5>Communication</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="80%"></div>
                  </div>
                </div>

                <div class="skill-bar">
                  <h5>Copywriting</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="75%"></div>
                  </div>
                </div>

                <div class="skill-bar">
                  <h5>Teamworks</h5>

                  <div class="de-progress">
                    <div class="value"></div>

                    <div class="progress-bar" data-value="85%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- section close -->

        <!-- section begin -->

        <section id="section-about" class="dark">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInRight">
                <h4 class="title">Who I Am</h4>

                <h2 class="title">About Me</h2>

                <div class="title-underline"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 mb-sm-30 text-center">
                <div class="de-images">
                  <div class="d-hover-zoom wow fadeInRight">
                    <a class="image-popup" href="{{ asset('images/misc/miketicup.jpg') }}">
                      <img
                        class="img-fluid"
                        src="{{ asset('images/misc/miketicup.jpg') }}"
                        alt=""
                      />
                    </a>
                  </div>

                  <div class="d-hover-zoom di-small-2 wow fadeInLeft">
                    <a class="image-popup" href="{{ asset('images/misc/turusberat.jpg') }}">
                      <img src="{{ asset('images/misc/turusberat.jpg') }}  " alt="" />
                    </a>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-5 offset-md-1 wow fadeInRight"
                data-wow-delay=".5s"
              >
                <h2>
                  Hello, I'm

                  <span class="id-color">I Gusti Agung Michael Swisnandya</span>
                </h2>

                <p>
                  I Gusti Agung Michael Swisnandya is a student who is
                  enthusiastic about photography and videography. Since the age
                  of four years he has known technology from his father, ranging
                  from computer equipment to the current device that he learned
                  self-taught because at that time IT teachers were still not
                  many.
                </p>

                <ul class="info-list text-white">
                  <li>
                    <span class="d_title">Age</span
                    ><span class="d_value">21</span>
                  </li>

                  <li>
                    <span class="d_title">Hobby</span
                    ><span class="d_value">Playing Video Games</span>
                  </li>

                  <li>
                    <span class="d_title">Residence</span
                    ><span class="d_value">Singaraja</span>
                  </li>

                  <li>
                    <span class="d_title">Address</span
                    ><span class="d_value">Banyuning, Singaraja, Bali</span>
                  </li>

                  <li>
                    <span class="d_title">Email</span
                    ><span class="d_value"
                      ><a href="mailto:info@gungmichael.my.id"
                        >info@gungmichael.my.id</a
                      ></span
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="spacer-80"></div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="s_border">My Services</h3>
              </div>

              <div class="col-lg-4 col-md-6 mb30">
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-laptop id-color"></i>

                  <div class="fb-text">
                    <h4>Graphic Design</h4>

                    <p>
                      My taste in design prioritizes layout composition
                      accompanied by aesthetics in order to give an impression
                      to the reader.
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 mb30 wow fadeInRight"
                data-wow-delay=".25s"
              >
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-camera id-color"></i>

                  <div class="fb-text">
                    <h4>Photography</h4>

                    <p>
                      I have been in the field of photography for the last 6
                      years, many portfolios that I have produced during this
                      time.
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 mb-30 wow fadeInRight"
                data-wow-delay=".5s"
              >
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-camera-movie id-color"></i>

                  <div class="fb-text">
                    <h4>Videography</h4>

                    <p>
                      It's just a hobby, but often accepts videography offers
                      when asked by clients.
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight"
                data-wow-delay="0s"
              >
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-object-group id-color"></i>

                  <div class="fb-text">
                    <h4>Hardware Technician</h4>

                    <p>
                      I really like tinkering with computers, I've dealt with
                      various problems, either hardware problems or software
                      problems.
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight"
                data-wow-delay=".25s"
              >
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-list id-color"></i>

                  <div class="fb-text">
                    <h4>Copywriting</h4>

                    <p>
                      I like to write about things I see or about tasks that
                      must be done such as essays.
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 mb-sm-30 wow fadeInRight"
                data-wow-delay=".5s"
              >
                <div class="f-box f-icon-left f-icon-box">
                  <i class="fa fa-computer-speaker id-color"></i>

                  <div class="fb-text">
                    <h4>Video Editor</h4>

                    <p>
                      At several moments, I often accept jobs to edit videos
                      that have been provided with raw materials.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="spacer-80"></div>
          </div>
        </section>

        <!-- section close -->

        <!-- section begin -->

        <section id="section-portfolio" class="dark">
          <div class="container">
            <!-- portfolio filter begin -->

            <div class="row">
              <div class="col-lg-12 wow fadeInRight">
                <h4 class="title">Showcase of my best works</h4>

                <h2 class="title">My Portfolio</h2>

                <div class="title-underline"></div>
              </div>

              <div
                class="col-md-12 text-center wow fadeInRight"
                data-wow-delay=".25s"
              >
                <ul id="filters">
                  <li>
                    <a href="#" data-filter="*" id="btn_all" class="selected"
                      >All Projects</a
                    >
                  </li>

                @foreach($categories as $category)
                    <li>
                        <a href="#" data-filter=".{{ strtolower(str_replace(' ', '-', $category->name)) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
                </ul>

                <div
                  id="gallery"
                  class="gallery full-gallery de-gallery zoom-gallery row sequence wow fadeInRight"
                  data-wow-delay=".5s"
                >
                  <!-- gallery item -->

                @foreach($projects as $project)
                    <div class="item col-md-4 mb30 gallery-item {{ strtolower(str_replace(' ', '-', $project->category->name)) }}">
                        <a class="picframe" href="{{ asset('storage/' . $project->image_path) }}" title="{{ $project->title }}" data-source="#">
                            <span class="overlay">
                                <span class="d-title">{{ $project->title }}</span>
                            </span>
                            <img src="{{ asset('storage/' . $project->image_path) }}" alt="" />
                        </a>
                    </div>
                @endforeach
                  <!-- close gallery item -->
                </div>
              </div>

              <!-- portfolio filter close -->
            </div>
          </div>
        </section>

        <!-- section close -->

        <!-- section begin -->

        <section id="section-blog" class="dark">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInRight">
                <h4 class="title">This is my story</h4>

                <h2 class="title">My Blog</h2>

                <div class="title-underline"></div>
              </div>
            </div>

            <div class="row wow fadeInRight" data-wow-delay=".25s">
              <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    @if(isset($blogs))
                        {{ count($blogs) }} blogs found.
                        <pre>{{ print_r($blogs, true) }}</pre>
                        @foreach($blogs as $blog)
                            <div class="post-content">
                                <div class="post-image d-hover-zoom">
                                    <a class="image-popup" href="{{ asset($blog->image_path) }}">
                                        <img alt="" src="{{ asset($blog->image_path) }}" />
                                    </a>
                                    <!-- Additional post-info here if needed -->
                                </div>
                                <div class="post-text">
                                    <h4><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                                    <p><b>Written by </b>{{ $authorName }}</p>
                                    <p>{{ $blog->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3 class="title col-lg-12 wow fadeInRight">No blogs found.</h3>
                    @endif
              </div>
            </div>
          </div>
        </section>

        <!-- section close -->

        <!-- section begin -->

        <section id="section-contact" class="dark">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInRight">
                <h4 class="title">Need a services?</h4>

                <h2 class="title">Contact Me</h2>

                <div class="title-underline"></div>
              </div>
            </div>

            <form
              name="contactForm"
              id="contact_form"
              class="row form-default wow fadeInRight"
              data-wow-delay=".25s"
              method="post"
              action="email.php"
            >
              <div class="col-md-6">
                <div class="field-set">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    placeholder="Your Name"
                  />

                  <div class="line-fx"></div>
                </div>

                <div class="field-set">
                  <input
                    type="text"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="Your Email"
                  />

                  <div class="line-fx"></div>
                </div>

                <div class="field-set">
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    class="form-control"
                    placeholder="Your Phone"
                  />

                  <div class="line-fx"></div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="field-set">
                  <textarea
                    name="message"
                    id="message"
                    class="form-control"
                    placeholder="Your Message"
                  ></textarea>

                  <div class="line-fx"></div>
                </div>
              </div>

              <div class="spacer-single"></div>

              <div class="col-md-12 text-center">
                <div id="submit">
                  <input
                    type="submit"
                    id="send_message"
                    value="Send"
                    class="btn btn-custom color-2"
                  />
                </div>

                <div id="mail_success" class="success">
                  Your message has been sent successfully.
                </div>

                <div id="mail_fail" class="error">
                  Sorry, error occured this time sending your message.
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>

      <!-- content close -->
    </div>

    <!-- Javascript Files

    ================================================== -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jpreLoader.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/enquire.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/typed-custom.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
    </body>
</html>
