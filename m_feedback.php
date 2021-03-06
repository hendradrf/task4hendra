
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FEEDBACK | SISPAK VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body background="assets/bg.png">

<div class="container">   <br> 
  <div class="navbar navbar-inverse">
   <?php  include 'menu.php'; ?>
  </div>

          <div style="min-height: 540px;">
            <h1 style="text-align: center;"> 
            <strong> Give us Your Feedback</strong> </h1>
            <br> 
            <div class="feedback" style="text-align: center;">

              <form>
                <label>
                  <input type="radio" name="feedback" value="1">
                  <i class='far fa-angry' style='font-size:50px; color: #997300 '></i>
                </label>

                <label>
                  <input type="radio" name="feedback" value="2">
                  <i class='far fa-frown' style='font-size:50px; color: #999900'></i>
                </label>

                <label>
                  <input type="radio" name="feedback" value="3">
                  <i class='far fa-meh' style='font-size:50px; color: #739900'></i>
                </label>

                <label>
                  <input type="radio" name="feedback" value="4">
                  <i class='far fa-smile' style='font-size:50px; color: #4d9900'></i>
                </label>

                <label>
                  <input type="radio" name="feedback" value="5">
                  <i class='far fa-smile-beam' style='font-size:50px; color: #269900'></i>
                </label>

                <h3> 
                <strong> Tell us what you think </strong> </h3>

                <textarea rows="4" cols="50" style="padding: 10px;">
                  Web ini sangat keren, karena ...
                </textarea>
                <br> <br>
                <button type="submit" name="feedbacksubmit" class="btn" style="width: 370px; background: #42455a; color: white">Kirim</button>
              </form>

            </div>
          </div>
     <br>
    </div>
 
    <?php  include 'footer.php'; ?> 

</body>
</html>

