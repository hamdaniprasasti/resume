<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Hamdani|Prasasti</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/scrolling-nav.js"></script>



  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">

          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <img class="img-header navbar-brand" src="favicon.png" alt="Brand">
              <a class="navbar-brand page-scroll" href="#page-top">Hamdani Prasasti</a>
          </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                <li><a class="page-scroll" href="#self">My Self</a></li>
                <li><a class="page-scroll" href="#skills">Skills</a></li>
                <li><a class="page-scroll" href="#galery">Mindset</a></li>
                <li><a class="page-scroll" href="#edu">Education</a></li>
                <li><a class="page-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
        </div>
      </nav>
    </header>

    <section id="intro" class="intro-section">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <img class="img-responsive" src="img/Logo.png" alt="">
              <div class="intro">
                  <span class="introduce">Let Me Introduce My Self</span>
                  <hr/>
                  <span class="keterangan">A Person who loved to learn new things and proud to solve the problem</span>
              </div>
            </div>
          </div>
      </div>
    </section>

  <section id="self" class="self-section">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-self">
              <h2>About Me</h2>
              <hr class="hr-self">
            </div>
            <div class="body-self">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-sm-3">
                    <img class="img-responsive" src="img/self/name.png" alt="Name-self">
                  </div>
                  <div class="col-sm-3">
                    <h3>Profile</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <h4>Hamdani Nindya Prasasti</h4>
                    <h4>Surakarta Nov 12, 1995</h4>
                    <br>
                    <address>
                      <strong>Jl. Letjend Sutoyo No. 67, Kadipiro, Banjarsari</strong>
                      <br/>
                      <strong>Surakarta (57136), Central Java</strong>
                      <br/>
                      <strong>Indonesia</strong>
                    </address>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-sm-3">
                    <img class="img-responsive" src="img/self/desc.png" alt="Desc-self">
                  </div>
                  <div class="col-sm-3">
                    <h3>Description</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?php
                    $desc = array("Excelent Fast Learner","Nice Comunication","Awesome Fight Spirit","Easily Cordinate","Great Attitude","Extraordinary Hardworker","Strong Leadership")
                    ?>
                    <h4>
                      <?php
                      foreach($desc as $desc){
                        ?>
                        <p>
                          <div class="col-lg-10" style="text-align: left;">
                          <?php echo $desc;?>
                          </div>
                          <div class="col-lg-2">
                            <span class="glyphicon glyphicon-ok">
                          </div>
                        </p>
                        <?php
                      }
                      ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

  <section id="skills" class="skills-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-skills">
            <h2>Skills</h2>
            <hr class="hr-skills">
          </div>
          <div class="body-skills">


              <div class="row">

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/php.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>PHP</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Advance</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/sql.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>SQL Database</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Advance</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/html.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>HTML</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Advance</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/coreldraw.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>Corel Draw</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Advance</h5>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/css.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>CSS</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Intermediate</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/bootstrap.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>Bootstrap</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Intermediate</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/js.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>Java Script</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Intermediate</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/oracle.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>ORACLE Database</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Intermediate</h5>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/android.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>Android Studio</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Baginner</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/laravel.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>Laravel Framework</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Baginner</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/skills/mongodb.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>No-SQL MongoDB</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>Baginner</h5>
                    </div>
                  </div>
                </div>

                  <div class="col-md-3">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <img class="card-img-top" src="img/skills/jquery.png" alt="">
                      </div>
                      <div class="panel-body">
                        <h5>JQuery</h5>
                      </div>
                      <div class="panel-footer">
                        <h5>Baginner</h5>
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

  <section id="galery" class="galery-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/1.jpg" alt="Photo 1" >
          </div>
          <div class="item">
            <img src="img/2.jpg" alt="Photo 2">
          </div>
          <div class="item">
            <img src="img/3.jpg" alt="Photo 3">
          </div>
          <div class="item">
            <img src="img/4.jpg" alt="Photo 4">
          </div>
          <div class="item">
            <img src="img/5.jpg" alt="Photo 5">
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>
  </section>

  <section id="edu" class="edu-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-edu">
            <h2>My Education</h2>
            <hr class="hr-edu">
          </div>
          <div class="body-edu">
            <div class="row">
              <div class="col-md-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <img class="card-img-top" src="img/edu/smk.png" alt="">
                  </div>
                  <div class="panel-body">
                    <h5>SMK N 2 Surakarta</h5>
                  </div>
                  <div class="panel-footer">
                    <h5>Computer and Network Engineering</h5>
                    </br>
                    <h5>Graduate 2013</h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <img class="card-img-top" src="img/edu/amikom.png" alt="">
                  </div>
                  <div class="panel-body">
                    <h5>STMIK Amikom Yogyakarta</h5>
                  </div>
                  <div class="panel-footer">
                    <h5>Informatics Engineering</h5>
                    </br>
                    <h5>Graduate 2017</h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <img class="card-img-top" src="img/edu/mta.png" alt="">
                  </div>
                  <div class="panel-body">
                    <h5>Microsoft Technology Associate</h5>
                  </div>
                  <div class="panel-footer">
                    <h5>Software Development Fundamental</h5>
                    </br>
                    <h5>Achieved in 2016</h5>
                  </div>
                </div>
              </div>

                <div class="col-md-3">
                  <div class="panel panel-success">
                    <div class="panel-heading">
                      <img class="card-img-top" src="img/edu/no-sql.png" alt="">
                    </div>
                    <div class="panel-body">
                      <h5>SOLUSI247 Workshop</h5>
                    </div>
                    <div class="panel-footer">
                      <h5>No-SQL Workshop</h5>
                      </br>
                      <h5>Achieved in 2016</h5>
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

  <section id="contact" class="contact-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="header-self">
              <h2>Contact</h2>
              <hr class="contact">
            </div>
          </div>
          <div class="row">
            <div class="body-self">
              <div class="col-md-6">
                <div class="col-md-2">
                  <img class="img-responsive" src="img/contact/telfon.png" alt="">
                </div>
                <div class="col-md-6">
                  <h3>+62857-2881-2882</h3>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-2">
                  <img class="img-responsive" src="img/contact/email.png" alt="">
                </div>
                <div class="col-md-6">
                  <h3>hamdani.prasasti@gmail.com</h3>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </section>

</body>
</html>
