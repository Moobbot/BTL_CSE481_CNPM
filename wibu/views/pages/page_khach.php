
<?php
while ($row = mysqli_fetch_array($data["Nhaxe"])) {
    echo $row["ten_nhaxe"] . "<br/>";
}
?>