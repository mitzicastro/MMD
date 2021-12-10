

<p style="border:3px; border-style:solid; border-color:#FF0000; padding: 1em;">Users Who Placed Orders</p>

<?php 
    require "includes/dbh.inc.php";
    //sql query stores pics
    $sql = "SELECT orders.id as 'id', uidUsers FROM orders JOIN users WHERE orders.user_id = idUsers;";
    $result = $conn->query($sql) or die(mysqli_error($conn)); //checks to see if there are results to the query and then storing the results in a variable



    while($row = mysqli_fetch_array($result)){
    if($row['id'] != null){
    echo "
    <div class='card single-item'>
        <div>
            ".$row['uidUsers']."
        </div>
    </div>";
}
}
?>