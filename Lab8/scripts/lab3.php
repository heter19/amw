          <?php
		 include("connect.php");
          
          
          $sql="select * from pilkarz order by id asc";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo  '<h4 class="display-4">Piłkarz:'.$row["id"].'</h4>' ."<b>Imie: </b>". $row["Imie"]." "."<b>Nazwisko:</b> ".$row["Nazwisko"]." ". "<b>Pozycja:</b> ".$row["Pozycja"]."<br>".'<a href="edit.php?id=' . $row['id'] . '" class="btn btn-dark"">Edit</a>'." ".'<a href="delete.php?id=' . $row['id'] . '"class="btn btn-dark">Delete</a>'."</div>"."<hr>";;
              }
          } else {
              echo "0 results";
          }
          $conn->close();
		  ?>