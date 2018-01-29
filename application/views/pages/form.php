<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $css ?>/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Subscription</title>
  </head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Subscription</h1>
    <p class="lead">Choose your plan and get on the path of learning</p>
  </div>
</div>

<div class="container">
  <div class="row">

    <!-- Plan Cyan -->
    <div class="col-sm">
      <div class="card curve subscribe">
      <div class="card-body">
        <h5 class="card-title">Cyan</h5>
        <p class="card-text">Monthly Billing</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">₹150/- billed monthly</li>
        <li class="list-group-item">Cost per month : ₹150/-</li>
        <li class="list-group-item">
        <p>
          <a class="card-link" data-toggle="collapse" href="#cyandetails" role="button" aria-expanded="false" aria-controls="collapseExample">
          More Details
          </a>
        </p>
        </li>
        <div class="collapse" id="cyandetails">
          <div class="card card-body">
           Lorem ipsum dolor sit amet, quas graeco scripserit vis id. 
           Usu libris accumsan delectus ex, prima elitr exerci nec ut.
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </ul>
        <div class="card-body">
      	  <a href="#" class="card-link">  
            <!-- Button trigger modal -->
            <button type="button" id="cyansub" class="btn btn-primary subpay" data-toggle="modal" data-target="#basicsub">
            Subscribe
            </button>
          </a>
        </div>
      </div>
    </div>

    <!-- Magenta Details -->
    <div class="col-sm">
      <div class="card curve subscribe">
      <div class="card-body">
        <h5 class="card-title">Magenta</h5>
        <p class="card-text">Quarterly Billing</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">₹400/- billed every 3 months</li>
        <li class="list-group-item">Cost per month ₹133.33/-</li>
        <li class="list-group-item">
        <p>
          <a class="card-link" data-toggle="collapse" href="#magentadetails" role="button" aria-expanded="false" aria-controls="collapseExample">
          More Details
          </a>
        </p>
        </li>
        <div class="collapse" id="magentadetails">
          <div class="card card-body">
           Lorem ipsum dolor sit amet, quas graeco scripserit vis id. 
           Usu libris accumsan delectus ex, prima elitr exerci nec ut.
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </ul>
        <div class="card-body">
          <a href="#" class="card-link">  
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#magentasub">
            Subscribe
            </button>
          </a>
        </div>
      </div>
    </div>
           
    <!-- Yellow Details -->
    <div class="col-sm">
      <div class="card curve subscribe">
      <div class="card-body">
        <h5 class="card-title">Yellow</h5>
        <p class="card-text">Annual Billing</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">₹1500/- billed annually</li>
        <li class="list-group-item">Cost per month ₹125/-</li>
        <li class="list-group-item">
        <p>
          <a class="card-link" data-toggle="collapse" href="#yellowdetails" role="button" aria-expanded="false" aria-controls="collapseExample">
          More Details
          </a>
        </p>
        </li>
        <div class="collapse" id="yellowdetails">
          <div class="card card-body">
           Lorem ipsum dolor sit amet, quas graeco scripserit vis id. 
           Usu libris accumsan delectus ex, prima elitr exerci nec ut.
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </ul>
        <div class="card-body">
          <a href="#" class="card-link">  
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yellowsub">
            Subscribe
            </button>
          </a>
        </div>
      </div>
    </div>

  </div> <!-- row -->
</div> <!-- container -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= $js ?>/custom.js"></script>
    

<!-- Basic Datisl Modals -->

<!-- Modal Cyan -->
<div class="modal fade" id="basicsub" tabindex="-1" role="dialog" aria-labelledby="basicsubTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="basicsubTitle">Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="cyansubform">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="Mazu">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="mazu@gmail.com">
  </div>
   <!-- Copy Paste the MaRRs Razorpay account respective plan_id here instead -->
    <input type="hidden" class="form-control" name="plan_id" value=" plan_9PoirNUNnNC1ML">
      </div>
      <div class="modal-footer">
      	<button type="submit" id="cyansub" class="btn btn-primary subsubmit">Submit</button>

</form>
        <button type="button" id="cyansubclose" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Magenta -->
<div class="modal fade" id="magentasub" tabindex="-1" role="dialog" aria-labelledby="magentasubTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="magentasubTitle">Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="magentasubform">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="Mazu">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="mazu@gmail.com">
  </div>
   <!-- Copy Paste the MaRRs Razorpay account respective plan_id here instead -->
    <input type="hidden" class="form-control" name="plan_id" value="plan_9Pp3DHIkGl3e5f">
      </div>
      <div class="modal-footer">
        <button type="submit" id="magentasub" class="btn btn-primary subsubmit">Submit</button>

</form>
        <button type="button" id="magentasubclose" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Yellow -->
<div class="modal fade" id="yellowsub" tabindex="-1" role="dialog" aria-labelledby="yellowsubTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="yellowsubTitle">Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="yellowsubform">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="Mazu">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="mazu@gmail.com">
  </div>
   <!-- Copy Paste the MaRRs Razorpay account respective plan_id here instead -->
   <input type="hidden" class="form-control" name="plan_id" value="plan_9Pp9yFNqlj5tMo">
      </div>
      <div class="modal-footer">
        <button type="submit" id="yellowsub" class="btn btn-primary subsubmit">Submit</button>

</form>
        <button type="button" id="yellowsubclose" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Trigger Buttons for Payment Modals -->

<!-- Modal Cyan Payment trigger -->
 <button type="button" style="display: none" id="cyansubpay" class="btn btn-primary" data-toggle="modal" data-target="#basicpay">Subscribe</button>

<!-- Modal Magenta Payment trigger -->
 <button type="button" style="display: none" id="magentasubpay" class="btn btn-primary" data-toggle="modal" data-target="#magentapay">Subscribe</button> 

 <!-- Modal Yellow Payment trigger -->
 <button type="button" style="display: none" id="yellowsubpay" class="btn btn-primary" data-toggle="modal" data-target="#yellowpay">Subscribe</button> 


<!-- Payment Modals -->

<!-- Modal Cyan Payment -->
<div class="modal fade" id="basicpay" tabindex="-1" role="dialog" aria-labelledby="basicpayTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="basicpayTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?= $base_url ?>/mainctrl/subscr" method="POST">
            
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_9rv7A1enQpZtNb"
    total_count="6",
    customer_notify="1",
    data-amount="15000"
    data-buttontext="Pay with Razorpay"
    data-description="Purchase Description"
    data-image="/ancatag/mars/assets/images/branding/logo.jpg"
    data-theme.color="#F37254"
></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>

      </div>
      <div class="modal-footer">

        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal Magenta Payment -->
<div class="modal fade" id="magentapay" tabindex="-1" role="dialog" aria-labelledby="magentapayTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="magentapayTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?= $base_url ?>/mainctrl/subscr" method="POST">
            
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_9rv7A1enQpZtNb"
    total_count="6",
    customer_notify="1",
    data-amount="40000"
    data-buttontext="Pay with Razorpay"
    data-description="Purchase Description"
    data-image="/ancatag/mars/assets/images/branding/logo.jpg"
    data-theme.color="#F37254"
></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>

      </div>
      <div class="modal-footer">

        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal Yellow Payment -->
<div class="modal fade" id="yellowpay" tabindex="-1" role="dialog" aria-labelledby="yellowpayTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="yellowpayTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">
          <form action="<?= $base_url ?>/mainctrl/subscr" method="POST">
            
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_9rv7A1enQpZtNb"
    total_count="6",
    customer_notify="1",
    data-amount="15000"
    data-buttontext="Pay with Razorpay"
    data-description="Purchase Description"
    data-image="/ancatag/mars/assets/images/branding/logo.jpg"
    data-theme.color="#F37254"
></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>

      </div>
      <div class="modal-footer">

        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</body>
</html>