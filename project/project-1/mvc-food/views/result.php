<div class="result">
  <?php
  //check if data was sent back to this page
  $mysqli = new mysqli("localhost", "kathy_food", "myNameiSKaThY999$", "kathy88_food");
  $query = "SELECT * FROM dish WHERE dishName = '" . $_POST['dishName'] . "' AND dishDescription = '" . $_POST['dishDescription'] . "'";
  if ($mysqli) {
    $result = $mysqli->query($query);
    $results = "";
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $results .= "<article>" . $row['dishID'] . " " . $row['dishName'] . " " . $row['dishDescription'] . "</article>";
      }
    } else {
      $results = "No results";
    }
    $mysqli->close();
    echo $results;
  } else {
    echo "failed";
  }
  ?>
</div>