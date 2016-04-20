<!DOCTYPE html>
<html lang="en">
  <head>
    <title>University of Karchi: Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function() {
          $('#news-link').click(function(e) {
          $("#news-panel").delay(500).fadeIn(500);
          $("#results-panel").fadeOut(500);
          $('#results-link').removeClass('active');
          $(this).addClass('active');
          e.preventDefault();
        });
        $('#results-link').click(function(e) {
          $("#results-panel").delay(500).fadeIn(500);
          $("#news-panel").fadeOut(500);
          $('#news-link').removeClass('active');
          $(this).addClass('active');
          e.preventDefault();
        });
      });
    </script>
  </head>
  <body>
    <div id="Header">
      <div class="container hidden-xs">
        <div id="UpperNav">
            <li id="UpperNavTabs"><a href="#" class="UpperNavSelectedTab">Email</a>|<a href="#">Facebook</a>|<a href="#">MCN</a>|<a href="#">Sitemap</a>|<a href="#">Directory</a></li>
        </div>
      </div>
      <br class="visible-xs">
      <div class="container" style="margin-bottom: 20px;">
        <div class="row">
          <div class="col-xs-6">
            <img src="logo.png" id="image">
          </div>
          <div id="PhoneNumber" class="hidden-xs">
            Call: (9221) 9926 1300-7
          </div>
        </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-inverse" id="LowerNav">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#">Toggle Links</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Campus News</a></li>
                  <li><a href="#"> Convocation</a></li>
                  <li><a href="#">Downloads</a></li>
                  <li><a href="#">Our history</a></li>
                </ul>
              </li>
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Admissions <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Morning Test based</a></li>
                  <li><a href="#">PharmD</a></li>
                  <li><a href="#">Masters Evening</a></li>
                  <li> <a href="#">M.Phil./Ph.D. &amp; M.S./M.D.</a></li>
                  <li><a href="#">International Students</a></li>
                </ul>
              </li>
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Faculties <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Engineering</a></li>
                  <li> <a href="#">Islamic Studies</a></li>
                  <li><a href="#">Law</a></li>
                  <li> <a href="#">Management Sciences</a></li>
                  <li><a href="#">Medicine</a></li>
                  <li> <a href="#">Pharmacy</a></li>
                  <li><a href="#">Science</a></li>
                  <li><a href="#">Social Sciences</a></li>
                  <li><a href="#">Institutes</a></li>
                </ul>
              </li>
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Library <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Digital Library</a></li>
                  <li><a href="#">Ebrar</a></li>
                </ul>
              </li>
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="">Vice Chancellor</a></li>
                  <li><a href="#">Registrar</a></li>
                  <li><a href="#">Syndicate Members</a></li>
                  <li><a href="#">Former Vice Chancellors</a></li>
                  <li><a href="#">Directorates &amp; Offices</a> </li>
                </ul>
              </li>
              <li class="header-dropdown">
                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Examination <span class="caretspan"><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Annual System</a></li>
                  <li><a href="#">Downloadable Forms </a></li>
                  <li><a href="#">Common Questions</a></li>
                  <li><a href="#">Overseas Examination</a></li>
                  <li><a href="#">Semester System</a></li>
                  <li><a href="#">Semester Rules Book</a></li>
                </ul>
              </li>
              <li class="header-dropdown"><a href="#">Alumni</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div id="slider">
      <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="slider0.jpg" alt="Chania">
            </div>
            <div class="item">
              <img src="slider1.jpg" alt="Chania">
            </div>
            <div class="item">
              <img src="slider2.jpg" alt="Flower" >
            </div>
            <div class="item">
              <img src="slider3.jpg" alt="Flower" >
            </div>
            <div class="item">
              <img src="slider4.jpg" alt="Flower" >
            </div>
          </div>
          <h3 id="sliderfooter">
            <a href="#">Alumini's registeration</a>, <a href="#"><img src="linkedIn.png">View UoK's profile</a> <a href="#"><img src="fb.jpg"></a> <a href="#" class="twitter-share-button" ><img src="twitter.png" style="width:70px"></a>
          </h3>
          <ol class="carousel-indicators hidden-xs">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
        </div>
      </div>
    </div>
    <div id="LatestBlock">
      <div class="container">
        <img src="latest.png"> Active Citizen Certificate Course : <a href="#">Advertisement</a> | <a href="#">Brochure</a> | <a href="#">Admission Form</a>
      </div>
    </div>
    <div id="WelcomeBlock" class="container">
        <div class="col-md-2"><img src="bg-1.png">&nbsp;&nbsp;&nbsp;<span>Welcome</span></div>
        <div class="col-md-10">
          At the time of creation of Pakistan as a sovereign state in 1947, means for higher education and research were negligible. Responding to the impending requirement the University of Karachi was established in 1951 :: <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="panel panel-box">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <h4><a href="#" class="active" tabindex="17" id="news-link">Latest News</a></h-fluid4>
                </div>
                <div class="col-xs-6">
                  <h4><a href="#" tabindex="9" id="results-link">Latest Results</a></h4>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div id="news-panel">
                    <ul class="Panel-List">
                      <li>
                        P.M Laptop Distribution Phase I
                        <br>
                        <span><a href="#">Notification</a> | <a href="#">Eligible Candidates List</a> (15/02/2016)</span>
                      </li>
                      <li>
                        B.Com Schedule 2015
                        <br>
                        <span><a href="#">Page 1</a> | <a href="#">Page 2</a> | <a href="#">Page 3</a> | <a href="#">Page 4</a> (14/01/2016)</span>
                      </li>
                      <li>
                        B.Ed. / M.Ed. Annual Examination
                        <br>
                        <span><a href="#">Read More</a></span>
                      </li>
                    </ul>
                    <div class="Panel-Footer"><span><a href="#">Go to News & Events Page >></a></span></div>
                  </div>
                  <div id="results-panel" style="display: none;">
                    <ul class="Panel-List">
                      <li>
                        B.D.S. Supplementary Exam 2015
                        <br>
                        <span><a href="#">First Professional</a> | <a href="#">Second Professional</a></span>
                      </li>
                      <li>
                        B.Com Supply (Reg & Ext) 2014
                        <br>
                        <span><a href="#">(Regular)</a> | <a href="#">(External)</a></span>
                      </li>
                      <li>
                        B.D.S. Annual Exam 2015
                        <br>
                        <span><a href="#">First Professional</a> | <a href="#">Second Professional</a></span>
                      </li>
                    </ul>
                    <div class="Panel-Footer"><span>Go to Results >> <a href="#">Annual System</a> | <a href="#">Semester System</a></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="panel panel-box">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <h4><a class="active" tabindex="17">Departments</a></h4>
                </div>
              </div>
            </div>
            <div class="panel-body" style="padding-bottom: 10px;">
              <div class="row">
                <div class="col-lg-12">
                  <div id="news-panel">
                    <div class="Panel-List">
                      <span style="font-size: 12px;color: #666666;">Jump to department (A-Z)</span>
                      <br>
                      <select class="col-lg-9 col-xs-8" style="margin-right: 5px;">
                        <option>Applied Physics</option>
                        <option>Arabic</option>
                        <option>Bengali</option>
                        <option>Biochemistry</option>
                        <option>Biotechnology</option>
                        <option>Botany</option>
                        <option>Business Administration</option>
                        <option>Chemical Engineering</option>
                        <option>Chemistry</option>
                        <option>Commerce</option>
                        <option>Computer Science</option>
                        <option>Economics</option>
                        <option>Education</option>
                        <option>English</option>
                        <option>Food Science &amp; Technology</option>
                        <option>General History</option>
                        <option>Genetics</option>
                        <option>Geography</option>
                        <option>Geology</option>
                        <option>Health &amp; Physical Education</option>
                        <option>International Relations</option>
                        <option>Islamic History</option>
                        <option>Islamic Learning</option>
                        <option>Library &amp; Inf. Science</option>
                        <option>Mass Communication</option>
                        <option>Mathematics</option>
                        <option>Microbiology</option>
                        <option>Persian</option>
                        <option>Petroleum Technology</option>
                        <option>Pharmaceutical Chemistry</option>
                        <option>Pharmaceutics</option>
                        <option>Pharmacognosy</option>
                        <option>Pharmacology</option>
                        <option>Pharmacy</option>
                        <option>Philosophy</option>
                        <option>Physics</option>
                        <option>Physiology</option>
                        <option>Political Science</option>
                        <option>Psychology</option>
                        <option>Public Administration</option>
                        <option>Quran wa Sunnah</option>
                        <option>Research Facility Center</option>
                        <option>Shah Latif Chair</option>
                        <option>Sindhi</option>
                        <option>Social Work</option>
                        <option>Sociology</option>
                        <option>Special Education</option>
                        <option>Statistics</option>
                        <option>Teacher Education</option>
                        <option>Urdu</option>
                        <option>Usool Uddin</option>
                        <option>Visual Studies</option>
                        <option>Zoology</option>
                      </select>
                      <button class="col-lg-2 col-xs-3 btn-success">Go</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-box">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-9">
                  <h4><a class="active" tabindex="17">Annual Examination Info</a></h4>
                </div>
              </div>
            </div>
            <div class="panel-body" style="padding-bottom: 10px;">
              <div class="row">
                <div class="col-lg-12">
                  <div id="news-panel">
                    <div class="Panel-List">
                      <span style="font-size: 11px;color: #666666;">
                        B.A./B.Com./B.O.L External :: <a href="#">Registration Forms</a>
                        <br>
                        B.Com. Supplementary Examination :: <a href="#">Regular</a> | <a href="#">External</a>
                        <br>
                        M.A./Double M.A.(Ext) :: <a href="#">Admit Cards</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
        <img src="vc.jpg" class="img-responsive">
        </div>
      </div>
    </div>
    <div style="background: url(footerendouter.png) repeat-x bottom;height: 120px;margin: 0 auto;">
      <div class="container" style="background: url(footerend.png) no-repeat bottom;height: 120px;margin: 0 auto;">
      </div>
    </div>
    <div id="Footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div><h4 class="FooterHeading">About Us</h4></div>
            <div class="FooterLinks">
              <a href="#">Downloads</a>
              <a href="#">MCN</a>
              <a href="#">News & Events</a>
              <a href="#">Picture Gallery</a>
            </div>
          </div>
          <div class="col-sm-2">
            <div><h4 class="FooterHeading">Quick Links</h4></div>
            <div class="FooterLinks">
              <a href="#">Affiliation Committee</a>
              <a href="#">Annual Convocation</a>
              <a href="#">Directorates & offices</a>
              <a href="#">Job Portal</a>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="FooterLinks">
              <a href="#">Plagiarism Policy</a>
              <a href="#">Physical Education</a>
              <a href="#">Tenders and Quotations</a>
              <a href="#">Scholarships</a>
              <a href="#">Placements and Internships</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div><h4 class="FooterHeading">Web Links</h4></div>
            <div class="FooterLinks">
              <a href="#">Digital Library</a>
              <a href="#">Download Center HEC-Microsoft</a>
              <a href="#">Higher Education Commission</a>
              <a href="#">Quality Enhancement Cell</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div><h4 class="FooterHeading">V.C. Office</h4></div>
            <div class="FooterLinks">
              <p>Inquiry Direct: 99261300-07 Ext: 2219</p>
              <p>Fax: 99261340, 99261330 (P.R.O.)</p>
              <p>Email: vc@uok.edu.pk</p>
            </div>
          </div>
        </div>
      </div>
      <hr style="border-top: dashed 1px #999999;" />
      <div class="container LastFooterLinks">
        &copy; 2011 University of Karachi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Credits</a> | <a href="#">Contact us</a> | <a href="#">Copyright</a> | <a href="#">Disclaimer</a> | <a href="#">Maps</a><br>Use IE-8 or above
      </div>
    </div>
  </body>
</html>