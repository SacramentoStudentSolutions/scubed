<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advisor Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/form_style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<!--style>
    .footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
        height:100px;
        background-color: #00563f;
        color: white;
        text-align: left;
        padding: 10px;
        font-family: 'Lato', sans-serif;
    }
</style-->

<body>

<!-- Nav Bar & Logout -->
<nav class="navbar navbar-expand-sm " style="background-color: #00563f" role="navigation">
    <img src="../resources/footer_tag.png" alt="image">
    <div class="collapse navbar-collapse" id="exCollapsingNavbar">
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li class="dropdown">
                <form class="form" role="form" action="https://www.google.com/" method = "post">
                    <button type="submit" id="logout" class="btn btn-primary btn-block">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-3">
    <div class="container-body">
      <h2>Student Lookup</h2>
      <p>Type something in the input field to search for a student:</p>
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <!-- Code to display the Student table -->
        <?php
        require_once('dbConnect.php');
        $sql = "SELECT * FROM Student";
        $result = mysqli_query($con, $sql);
        ?>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>
              <th>SacStateID</th>
              <th>LastName</th>
              <th>MiddleInitial</th>
              <th>FirstName</th>
              <th>EmailAddress</th>
              <th>CellPhoneNumber</th>
              <th>CatalogYear</th>
              <th>PlannedGraduationDate</th>
          </tr>
        </thead>
        <tbody id="myTable">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><a href='http://athena.ecs.csus.edu/~scubed/PHP/fpdf181/advisingform.php' >".$row["SacStateID"]."</a></td>";
                echo "<td>".$row["LastName"]."</td>";
                echo "<td>".$row["MiddleInitial"]."</td>";
                echo "<td>".$row["FirstName"]."</td>";
                echo "<td>".$row["EmailAddress"]."</td>";
                echo "<td>".$row["CellPhoneNumber"]."</td>";
                echo "<td>".$row["CatalogYear"]."</td>";
                echo "<td>".$row["PlannedGraduationDate"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>
        </tbody>
      </table>
    </div>
</div>

<div style="background-color: #00563f; margin-top: 30px">
    <img src="../resources/footer_tag.png" alt="image">
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
