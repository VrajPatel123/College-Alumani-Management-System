<?php
session_start();
require_once('connection.php');
$id=$_SESSION['sid'];
//echo "select * from bio_normal where s_id=$id order by bid desc limit 1";
$r=mysqli_fetch_array(mysqli_query($cn,"select * from bio_normal where s_id=15 order by bid desc limit 1 "));

$html = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <h1>Welcome to ItSolutionStuff.com</h1>
        <table class="table table-bordered">
            <tr>
                <th colspan="2">Information Form</th>
            </tr>
            <tr>
                <th>Name</th>
                <td>'.$name.'</td>
            </tr>
            
        </table>';


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

<style type="text/css">
    div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,hgroup,menu,nav,section,summary,time,mark,audio,video {
border:0;
font:inherit;
font-size:100%;
margin:0;
padding:0;
vertical-align:baseline;
}

article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
display:block;
}

/*html, body {background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;}*/

.clear {clear: both;}

p {
    font-size: 1em;
    line-height: 1.4em;
    margin-bottom: 20px;
    color: #444;
}

#cv {
    width: 90%;
    max-width: 800px;
    background: #f3f3f3;
    margin: 30px auto;
}

.mainDetails {
    padding: 25px 35px;
    border-bottom: 2px solid;
    background: #ededed;
}

#name h1 {
    font-size: 2.5em;
    font-weight: 700;
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    margin-bottom: -6px;
}

#name h2 {
    font-size: 2em;
    margin-left: 2px;
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
}

#mainArea {
    padding: 0 40px;
}

#headshot {
    width: 12.5%;
    float: left;
    margin-right: 30px;
}

#headshot img {
    width: 100%;
    height: auto;
    -webkit-border-radius: 50px;
    border-radius: 50px;
}

#name {
    float: left;
}

#contactDetails {
    float: right;
}

#contactDetails ul {
    list-style-type: none;
    font-size: 0.9em;
    margin-top: 2px;
}

#contactDetails ul li {
    margin-bottom: 3px;
    color: #444;
}

#contactDetails ul li a, a[href^=tel] {
    color: #444; 
    text-decoration: none;
    -webkit-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
    transition: all .3s ease-in;
}

#contactDetails ul li a:hover { 
    color: #cf8a05;
}


section {
    border-top: 1px solid #dedede;
    padding: 20px 0 0;
}

section:first-child {
    border-top: 0;
}

section:last-child {
    padding: 20px 0 10px;
}

.sectionTitle {
    float: left;
    width: 25%;
}

.sectionContent {
    float: right;
    width: 72.5%;
}

.sectionTitle h1 {
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    font-style: italic;
    font-size: 1.5em;
    color: #cf8a05;
}

.sectionContent h2 {
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    font-size: 1.5em;
    margin-bottom: -2px;
}

.subDetails {
    font-size: 0.8em;
    font-style: italic;
    margin-bottom: 3px;
}

.keySkills {
    list-style-type: none;
    -moz-column-count:3;
    -webkit-column-count:3;
    column-count:3;
    margin-bottom: 20px;
    font-size: 1em;
    color: #444;
}

.keySkills ul li {
    margin-bottom: 3px;
}

@media all and (min-width: 602px) and (max-width: 800px) {
    #headshot {
        display: none;
    }
    
    .keySkills {
    -moz-column-count:2;
    -webkit-column-count:2;
    column-count:2;
    }
}

@media all and (max-width: 601px) {
    #cv {
        width: 95%;
        margin: 10px auto;
        min-width: 280px;
    }
    
    #headshot {
        display: none;
    }
    
    #name, #contactDetails {
        float: none;
        width: 100%;
        text-align: center;
    }
    
    .sectionTitle, .sectionContent {
        float: none;
        width: 100%;
    }
    
    .sectionTitle {
        margin-left: -2px;
        font-size: 1.25em;
    }
    
    .keySkills {
        -moz-column-count:2;
        -webkit-column-count:2;
        column-count:2;
    }
}

@media all and (max-width: 480px) {
    .mainDetails {
        padding: 15px 15px;
    }
    
    section {
        padding: 15px 0 0;
    }
    
    #mainArea {
        padding: 0 25px;
    }

    
    .keySkills {
    -moz-column-count:1;
    -webkit-column-count:1;
    column-count:1;
    }
    
    #name h1 {
        line-height: .8em;
        margin-bottom: 4px;
    }
}

@media print {
    #cv {
        width: 100%;
    }
}

@-webkit-keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@-webkit-keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@-moz-keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@-moz-keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.instaFade {
    -webkit-animation-name: reset, fade-in;
    -webkit-animation-duration: 1.5s;
    -webkit-animation-timing-function: ease-in;
    
    -moz-animation-name: reset, fade-in;
    -moz-animation-duration: 1.5s;
    -moz-animation-timing-function: ease-in;
    
    animation-name: reset, fade-in;
    animation-duration: 1.5s;
    animation-timing-function: ease-in;
}

.quickFade {
    -webkit-animation-name: reset, fade-in;
    -webkit-animation-duration: 2.5s;
    -webkit-animation-timing-function: ease-in;
    
    -moz-animation-name: reset, fade-in;
    -moz-animation-duration: 2.5s;
    -moz-animation-timing-function: ease-in;
    
    animation-name: reset, fade-in;
    animation-duration: 2.5s;
    animation-timing-function: ease-in;
}
 
.delayOne {
    -webkit-animation-delay: 0, .5s;
    -moz-animation-delay: 0, .5s;
    animation-delay: 0, .5s;
}

.delayTwo {
    -webkit-animation-delay: 0, 1s;
    -moz-animation-delay: 0, 1s;
    animation-delay: 0, 1s;
}

.delayThree {
    -webkit-animation-delay: 0, 1.5s;
    -moz-animation-delay: 0, 1.5s;
    animation-delay: 0, 1.5s;
}

.delayFour {
    -webkit-animation-delay: 0, 2s;
    -moz-animation-delay: 0, 2s;
    animation-delay: 0, 2s;
}

.delayFive {
    -webkit-animation-delay: 0, 2.5s;
    -moz-animation-delay: 0, 2.5s;
    animation-delay: 0, 2.5s;
}
</style>
</head>
<body>
    <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-12 col-md-12 ml-auto">
                                            <div class="register-form-wrap">
                                                <div class="mainDetails">
                                                    <div id="headshot">
                                                        <img src="../project_admin/image/normal_biodata/<?php echo $r['photo']; ?>" alt="Alan Smith" style="width: 100px;height: 100px;"  />
                                                    </div>
                                                    
                                                    <div id="name">
                                                        <h1><?php echo $r[2]; ?></h1><br>
                                                        
                                                    </div>
                                                    
                                                    <div id="contactDetails">
                                                        <ul>
                                                            <li>Email: <?php echo $r[7]; ?></li>
                                                            <li>Mobile: <?php echo $r[6]; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div id="mainArea">
                                                    <section>
                                                        <article>
                                                            <div class="sectionTitle">
                                                                <h1>Personal Profile</h1>
                                                            </div>
                                                            
                                                            <div class="sectionContent">
                                                                <table class="">
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Date Of Birth:</th>
                                                                        <td><label><?php echo $r[4]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Age:</th>
                                                                        <td><label><?php echo $r[3]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Gender:</th>
                                                                        <td><label><?php echo $r[40]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Address:</th>
                                                                        <td><label><?php echo $r[5]; ?></label></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </article>
                                                        <div class="clear"></div>
                                                    </section>
                                                    
                                                    
                                                    <section>
                                                        <div class="sectionTitle">
                                                            <h1>Educational Qualification</h1>
                                                        </div>
                                                        
                                                        <div class="sectionContent">
                                                            <table class="table">
                                                                                <tr>
                                                                                    
                                                                                        <th scope="col"style="font-weight: bold;">Year Of Passing</th>
                                                                                        <th scope="col"style="font-weight: bold;">Qualification</th>
                                                                                        <th scope="col"style="font-weight: bold;">Specialisation or Subjects</th>
                                                                                        <th scope="col"style="font-weight: bold;">School/College/University</th>
                                                                                        <th scope="col"style="font-weight: bold;">Total marks %/CGPA</th>
                                                                                        <th scope="col"style="font-weight: bold;">Any Other Relevant Information</th>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[8]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            SSC/10th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[18]; ?></label>    
                                                                                        </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[23]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[28]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[33]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[9]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            HSC/12th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[19]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[24]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[29]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[34]; ?></label>
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[10]; ?></label>
                                                                                         </td>
                                                                                        <td>  
                                                                                            Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[20]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[25]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[30]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[35]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[11]; ?></label>
                                                                                         </td>
                                                                                        <td>  
                                                                                            Post Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[21]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[26]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[31]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[36]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[12]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            Any Other 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[22]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[27]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[32]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[37]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                            </table>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </section>
                                                    
                                                    
                                                    <section>
                                                        <article>
                                                            <div class="sectionTitle">
                                                                <h1>Personal Information</h1>
                                                            </div>
                                                            
                                                            <div class="sectionContent">
                                                                <table class="table">
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Hobies:</th>
                                                                        <td><label><?php echo $r[38]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Maritial Status:</th>
                                                                        <td><label><?php echo $r[39]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Language Known:</th>
                                                                        <td><label><?php echo $r[41]; ?></label></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </article>
                                                        <div class="clear"></div>
                                                    </section>
                                                    

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
</body>
</html>

