  <?php
    session_start();
    include('../model/db.php');
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../css/mycss.css">
      <title>Vendor Home</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>


  <body>
      <div class="header">
          <h1>Welcome To RideHub</h1>
          <h2>Customers Requested Cars</h2>
      </div>
      <nav>
          <a href="VendorHome.php">Home</a> |
          <a href="VendorProfile.php">My Profile</a> |
          <a href="logout.php">Log Out</a>
      </nav>

      <!-- main  -->
      <section class="pad-70">
          <div class="container">
              <p id="mytext"></p>
              <?php

                $connection = new db();
                $conobj = $connection->OpenCon();
                $userQuery = $connection->Show($conobj, "requested_car");
                if ($userQuery->num_rows > 0) {
                    echo "<table><tr><th>Name</th><th>Model</th><th>Sit Count</th><th>Fare/Hour</th><th>Status By Vendor</th><th>Customer ID</th><th>Driver ID</th><th>Status by Driver</th><th >Req ID</th><th>Action</th></tr>";
                    // output data of each row
                    while ($row = $userQuery->fetch_assoc()) {
                        $x = htmlentities($row['req_id']);
                        echo "<tr ><td id='carname'>";
                        echo (htmlentities($row['carname']));
                        echo ("</td><td>");
                        echo (htmlentities($row['carmodel']));
                        echo ("</td><td>");
                        echo (htmlentities($row['sitcount']));
                        echo ("</td><td>");
                        echo (htmlentities($row['fareperh']));
                        echo ("</td><td>");
                        echo (htmlentities($row['status_vendor']));
                        echo ("</td><td>");
                        echo (htmlentities($row['customer_id']));
                        echo ("</td><td>");
                        echo (htmlentities($row['driver_id']));
                        echo ("</td><td >");
                        echo (htmlentities($row['status_driver']));
                        echo ("</td><td id='req_id'>");
                        echo (htmlentities($row['req_id']));
                        echo ("</td><td>");
                        echo ('<button class="btn btn-lg btn-success">Confirm</button> <button onclick="MyAjaxFunc()" class="btn btn-lg btn-danger">Cancel</button>');
                        echo ("</td></tr>\n");
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                ?>
          </div>

      </section>
      <!-- main  -->
      <!-- footer  -->
      <footer>
          <div class="container footer-wrap">
              <div class="footer-left">
                  <ul class="footer-menu">
                      <li><a href="">Terms and Conditions</a></li>
                      <li><a href="">Privacy</a></li>
                  </ul>

              </div>
              <div class="footer-right">
                  <ul class="footer-menu">
                      <li><a href="">Follow</a></li>
                      <li><a href=""><i class="fab fa-facebook"></i></a></li>
                      <li><a href=""><i class="fab fa-twitter"></i></a></li>
                      <li><a href=""><i class="fab fa-instagram"></i></a></li>

                  </ul>
              </div>
          </div>
      </footer>
      <!-- footer  -->
      <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>



      <script>
      //When the DOM is fully loaded
      window.addEventListener('DOMContentLoaded', _e => {

          //Find all buttons
          const buts = document.querySelectorAll('.btn-success');
          //Add a click handler to each one
          buts.forEach(button => {
              button.addEventListener('click', e => {

                  //Find parent <tr>
                  const tr = button.closest('tr');
                  //Find child with id req_id and get its text
                  const req_id = tr.querySelector('#req_id').innerText;

                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {

                      if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("mytext").innerHTML = this.responseText;

                      } else {
                          document.getElementById("mytext").innerHTML = this.status;
                      }
                  };
                  xhttp.open("POST", "../Control/acceptCarVendor.php", true);
                  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                  xhttp.send("req_id=" + req_id);
              });
          });
      });

      /** Find closest parent element matching css selector
       * Not related to this problem: just a helper function we're using
       **/
      function closest(elem, selector) {
          for (; elem && elem !== document; elem = elem.parentNode) {
              if (elem.matches(selector)) return elem;
          }
          return null;
      };

      $(document).ready(function() {
          $("button").click(function() {
              location.reload(true);
          });
      });
      </script>

  </body>

  </html>