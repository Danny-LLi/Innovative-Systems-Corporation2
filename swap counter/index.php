<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Money, Pay Online, or Set Up a Merchant Account.</title>
    <link rel="stylesheet" href="swingcounter.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</head>

<body>

    
    <div class="container">
    
        <div class="row">
    
        <div class="four col-md-3">
            <div class="counter-box colored">
                <i class="fa fa-thumbs-o-up"></i>
                <span class="counter"><?PHP echo("2147"); ?></span>
                <p>Happy Customers</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa fa-group"></i>
                <span class="counter">3275</span>
                <p>Registered Members</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa  fa-shopping-cart"></i>
                <span class="counter">289</span>
                <p>Available Products</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box">
                <i class="fa  fa-user"></i>
                <span class="counter">1563</span>
                <p>Saved Trees</p>
            </div>
        </div>
      </div>	
    </div>
    <script>
        
        
        $(document).ready(function() {
        
                $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
         
        });  
        
        
        
        </script>
</body>

</html>