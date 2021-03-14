<?php include("path.php"); ?>


<!DOCTYPE html>
<html lang="en">
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Montserrat";
  }
  section {
    height: 100vh;
    width: 100%;
    background-color: aliceblue;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .container {
    width: 90%;
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0px 0px 20px #00000010;
    background-color: white;
    border-radius: 8px;
    margin-bottom: 20px;
  }
  .form-group {
    width: 100%;
    margin-top: 20px;
    font-size: 20px;
  }
  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 5px;
    font-size: 18px;
    border: 1px solid rgba(128, 128, 128, 0.199);
    margin-top: 5px;
  }
  
  textarea {
    resize: vertical;
  }
  button[type="submit"] {
    width: 100%;
    border: none;
    outline: none;
    padding: 20px;
    font-size: 24px;
    border-radius: 8px;
    font-family: "Montserrat";
    color: rgb(27, 166, 247);
    text-align: center;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s ease background-color;
  }
  button[type="submit"]:hover {
    background-color: rgb(214, 226, 236);
  }
  #status {
    width: 90%;
    max-width: 500px;
    text-align: center;
    padding: 10px;
    margin: 0 auto;
    border-radius: 8px;
  }
  #status.success {
    background-color: rgb(211, 250, 153);
    animation: status 4s ease forwards;
  }
  #status.error {
    background-color: rgb(250, 129, 92);
    color: white;
    animation: status 4s ease forwards;
  }
  @keyframes status {
    0% {
      opacity: 1;
      pointer-events: all;
    }
    90% {
      opacity: 1;
      pointer-events: all;
    }
    100% {
      opacity: 0;
      pointer-events: none;
    }
  }
  
    </style>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
 
  <title>Prove Claim</title>
</head>

<body>


  <!-- Facebook Page Plugin SDK -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1">
  </script>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>



  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
        

          <div class="post-content">
         
         
            <h3>Please submit a form of proof below.</h3>

            
             <div class="container">
                <form action="https://formspree.io/f/mleoqnzv" 
                    method="POST" 
                    id="my-form"
                    enctype="multipart/form-data"
                >

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="upload">Picture of proof</label>
                    <input type="file" id="upload" name="upload">
                </div>


                <div class="form-group">
                    <label for="massage">Massage</label>
                    <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
                </div>

                    <button type="submit">Claim</button>
                 </form>
            </div>
            <div id="status"></div>
            
          </div>
        </div>
      </div>
         <!-- // Main Content -->
    </div>
    <!-- // Content -->
  </div>
  <!-- // Page Wrapper -->

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./myForm.js"></script>

  
</body>

</html>