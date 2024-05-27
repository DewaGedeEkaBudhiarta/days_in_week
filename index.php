<?php
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Test 1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h2 class="today">Today is <span class="todaycolor"> <?php echo date("l") ?> </span> </h2>
  
  <ul class="days">
    
  <?php foreach ($days as $days) { ?>
      
    <li class="daysList <?= date("l") == $days ? "todaybg" : "" ?> <?= $days ?>" id="days" onclick="selectDay('<?= $days ?>')">

        <?php echo $days ?></li>
    
    <?php } ?>
  </ul>
  
  <h2 class="today">Selected day is <span id="selectedDay" class="selectedcolor"> <?php echo "" ?> </span> </h2>

</body>

</html>

<script>
  function selectDay(x) {
    document.getElementById("selectedDay").innerHTML = x;

    document.querySelectorAll(".daysList").forEach(x => x.classList.remove("selectedday"))

    document.querySelector(`.${x}`).classList.add("selectedday")
  }
</script>