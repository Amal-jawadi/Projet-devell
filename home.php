<div class="responsive">
    <div class="gallery">
    <?php 
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { ?>
        
            <img src="<?php echo $row["img"] ?>" alt="Cinque Terre">
          <div class="desc"><p><?php echo $row["titre"] ?></p>
          <p><?php echo $row["prix"] ?>dt</p>
        </div>
        </div>
        <?php    }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
      </div>

