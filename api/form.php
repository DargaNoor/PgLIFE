<html>
    <head>
        <link href="../../css/property_list.css" rel="stylesheet" />
</head>
<body>
    <h1 style="text-align:center;">Fill the Form to change the Interested PG's</h1>
        <form action="toggle_interested.php" method="GET">
    
    <label for="property_id" style="font-size:19px">Enter Property ID which you want to add the PG to the interest list or remove from the interest list</label><br /><br/>
    <input type="number" name="property_id" id="property_id" style="
  
  margin:10px 0;border: 2px solid rgb(200,100,50);border-radius:10px;" required /><br/>
    <p><span style="font-size:18px;color:green;font-weight:bold;">NOTE:</span> To know the Property ID of Specific PG, can SCROLL DOWN <br/><br/>
    <input type="submit" value="Submit" placeholder="Enter ID here" style="font-size:14px;border-radius:3px 4px;background-color: rgb(130,210,220);"/>
</form>
<div>
    <?php
    session_start();
    $_SESSION['prev']= basename($_SERVER['HTTP_REFERER']);
   
require "../includes/database_connect.php";
$city_name =$_SESSION['city_name'];
$sql_2 = "SELECT p.id,p.name FROM properties p,cities c WHERE p.city_id = c.id and c.name='$city_name' order by rent ASC";
        $result_2 = mysqli_query($conn, $sql_2);
        if (!$result_2) {
            echo "Something went wrong!";
            return;
        
        }?>
        <table class="style-table" style="text-align:center;border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 95%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
">
<thead>
            <tr style="background-color: #009879;
    color: #ffffff;">
                <th style="padding: 12px 15px;">ID</th>
                <th style="padding: 12px 15px;">NAME</th>
            <tr>
    </thead>
    <tbody>
        <?php
        $j=0;
        if ($result_2->num_rows > 0) :
            // output data of each row.
            while($row = $result_2->fetch_assoc()) :?>
            <tr style="border-bottom: 1px solid #dddddd;">
                <?php if($j%2==0):?>
                <td style="padding: 12px 15px;"><?php echo $row["id"];$j=$j+1;?></td>
                <td style="padding: 12px 15px;"><?php echo $row["name"]; ?></td>
                <?php else:?>
                <td style="padding: 12px 15px;background-color: pink;"><?php echo $row["id"];$j=$j+1;?></td>
                <td style="padding: 12px 15px;background-color: pink;"><?php echo $row["name"] ?></td>
                <?php endif;?>
            <tr>
            <?php endwhile; endif; ?>
    </tbody>


</body>
</html>