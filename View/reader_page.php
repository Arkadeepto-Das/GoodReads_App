<!-- HTML part of the reader page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500&family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Content/css/style_reader.css">
  <title>Overview</title>
</head>
<body>
  <div class="container">
    <h4>Full name : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"]?></h4>
    <table class="books">
      <tr>
        <th>Bucket list</th>
        <th>Wish list</th>
        <th>Currently reading</th>
      </tr>
      <?php
        while($row = $_SESSION["readerDetails"]->fetch_assoc()) {
      ?>
      <tr>
        <td>
          <?php
            if(isset($row["Bucket_list"])) {
              echo $row["Bucket_list"];
            }
          ?>
        </td>
        <td>
          <?php
            if(isset($row["Wish_list"])) {
              echo $row["Wish_list"];
            }
          ?>
        </td>
        <td>
          <?php
            if(isset($row["Reading"])) {
              echo $row["Reading"];
            }
          ?>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
  </div>
</body>
</html>
