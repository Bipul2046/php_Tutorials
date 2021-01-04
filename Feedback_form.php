<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Feedback Form</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Feedback Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $feed = $_POST['feedback'];
                
              //insert into data base
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "feeback";
                //create connection object
                $conn = mysqli_connect($servername,$username,$password,$database);

                if(!$conn){
                    //die("Connection Failed to connect.".mysqli_connect_error());
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Database Down ! Try after some time .</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                else{
                    $sql = "INSERT INTO `feedbackdata` (`Name`, `Email`, `Feedback`, `dt`) VALUES ( '$name', '$email', '$feed', current_timestamp());";
                    $result = mysqli_query($conn,$sql);

                    if($result){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Your Entry has been submited Successfully .</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                    else{
                        //echo "Error ".mysqli_error($conn);
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Your Entry was not submited successfully  .</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                }
            } 
        ?>



        <div class="container   mt-5 ">
            <h3 class="text-center">Submit Your Feedback </h3>
            <div class="container">
            <form action="/vipul/feedback_form.php" method="post">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" name="fullname">
                    
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                </div>
                <label for="feedback" class="form-label">Feedback</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="feedback" style="height: 100px" name="feedback"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            </div>
        </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
