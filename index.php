<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IoT Mousetrap v0.1</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">IoT Mousetrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<!--
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
!-->    
  </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong id="#trapheader">Mousetrap Active</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Build a better mousetrap, and the world will beat a path to your door.<br><img id="trapimg" src="trap.png" height="500" width="550"/></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about" id="trapstat">Trap Is Open</a>
          </div>
        </div>
      </div>
    </header>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <script>
$(document).ready(function(){
setInterval(function(){
        $.get("triggerstatus.txt", function(data, status){
            //alert("Data: " + data + "\nStatus: " + status);
	    //if(data=="true"){
	    //$("#trapstat").text("Trap Sprung!");
	    //$("#trapimg").attr("src", "crossbones.png");
	    //alert("trap sprung");
	    //}
	    //else if(data=="false"){
	    //$("#trapstat").text("Trap Is Open");
	    //$("#trapimg").attr("src", "trap.png");
	    //}
	    //else{
	    //alert(data);
	    //}
	    if(data=="true"){
	    $("#trapstat").text("Trap Sprung!");
	    $("#trapheader").text("Mouse Caught!");
            $("#trapimg").attr("src", "crossbones.png");
	    }
	    if(data=="false"){
	    //alert("No mouse caught");
	    $("#trapstat").text("Trap Is Open");
	    $("#trapheader").text("Mousetrap Active");
	    $("#trapimg").attr("src", "trap.png");
	    }
        });}, 3000);
});
</script>
  </body>

</html>