    <!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:alumnistar2020@gmail.com"><strong>Email:</strong> alumnistar2020@gmail.com</a>
                        <a href="tel:+91-8160691814"><strong>Need help?:</strong> +91-8160691814</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <?php

                        if(!isset($_SESSION['sname']))
                        {
                        ?>
                        <a title="Login" class="btn-auth btn-auth-rev" href="student_login.php">Login</a>
                        <a title="Register" class="btn-auth btn-auth" href="student_registration.php">Signup</a>
                        <?php
                        }   
                        else {
                             
                             ?>
                             <a title="Login" class="btn-auth btn-auth-rev" href="logout.php">LogOut</a>
                             <a title="Register" class="btn-auth btn-auth" href="student_profile.php">Profile</a>
                             <?php # code...
                          }  
                          ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-13">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/Alumini-Star-Watermark.png" height="77px" width="300px" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="staff_detail.php">Staff Details</a></li>
                                       <li class="nav-item"><a class="nav-link" href="student_detail.php">Student Details</a></li>
                                    </ul>
                                </li>
                                
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">News</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                                       <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="oppurtunity.php">Oppurtunity</a></li>
                                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">Biodata</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="normal_biodata.php">Normal Biodata</a></li>
                                       <li class="nav-item"><a class="nav-link" href="cv_biodata.php">CV Biodata</a></li>
                                       <li class="nav-item"><a class="nav-link" href="resume_biodata.php">Resume Biodata</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== Header Area End ==-->