<html>

<head>
  <meta charset="UTF-8">
  <meta charset="utf-8" />
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="">
  <link rel="canonical" href="index.html">
  <title>
    efarm
  </title>
  <meta property="og:site_name" content="Naturix">
  <meta property="og:url" content="index.html">
  <meta property="og:title" content="Naturix">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Naturix">
  <meta name="twitter:site" content="@roartheme">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Naturix">
  <meta name="twitter:description" content="Naturix">
  <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="../cdn.shopify.com/s/files/1/1866/9297/t/9/assets/rt-application.scss58d1.css?16286615228135755537" rel="stylesheet" type="text/css" media="all" />
  <link href="../cdn.shopify.com/s/files/1/1866/9297/t/9/assets/rt-naturix.scss58d1.css?16286615228135755537" rel="stylesheet" type="text/css" media="all" />
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" type="text/css" media="all" />
  <link href="http://fonts.googleapis.com/css?family=Great+Vibes:300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Star rating using pure CSS</title>
  <style type="text/css">
    

  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>
function 
</head>

<body>
  <div class="rate">
    <form>
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>   <br><br><br>
    <div class="btn-group">
    <button class="hover btn btn-warning btn-lg"><i class="fa fa-star"></i></button>
    <button class="hover btn btn-warning btn-lg"><i class="fa fa-star"></i></button>
    <button class="hover btn btn-warning btn-lg"><i class="fa fa-star"></i></button>
    <button class="hover btn btn-warning btn-lg"><i class="fa fa-star"></i></button>
    <button class="hover btn btn-warning btn-lg"><i class="fa fa-star"></i></button>
    </div>
    </form>
    
  </div>
</body>

</html>