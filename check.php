<?php
session_start();
$conn = new mysqli( 'localhost','root','','nsu_bus');
if(!$conn){
    echo 'not connect';
}
$users_email=$_SESSION['email'] ;
$sql = "SELECT HOME_adrs FROM userinf WHERE email='$users_email' ";
$result1 = $conn->query($sql);
$adrs;
if ($result1->num_rows > 0)
{
    // OUTPUT DATA OF EACH ROW
    while($row = $result1->fetch_assoc())
    {

        $adrs= $row['HOME_adrs'];

    }
}
//$ad =json_encode($adrs);
echo $adrs;
$query = "SELECT  b.BUS_id , b.route_id,b.BUS_NO , b.avlSEAT,r.fromDES,r.toDES  , b.time
FROM route R , bus B
WHERE r.fromDES= '$adrs' and r.route_id=b.route_id";
$result = mysqli_query($conn, $query);
?>
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-image: url('checkpage.jpg');
  background-size: 1800px 900px;
}
</style>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border: 1px solid black;

}

table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
  <br><br><br>
  <center>
<table class="center">
  <table style="width:100%">


  <tr>
    <th>BusID</th>
    <th>Route_id</th>
    <th>BUS_NO</th>
    <th>Available_SEAT</th>
    <th>fromDestination</th>
    <th>toDestination</th>
    <th>Time'</th>
  </tr>

<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>

   <td><?php echo $data['BUS_id']; ?> </td>
   <td><?php echo $data['route_id']; ?> </td>
   <td><?php echo $data['BUS_NO']; ?> </td>
   <td><?php echo $data['avlSEAT']; ?> </td>
   <td><?php echo $data['fromDES']; ?> </td>
   <td><?php echo $data['toDES']; ?> </td>
   <td><?php echo $data['time']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table

 <div class="button"> <!--creat button -->
   <br><br><p style="color: darkgreen;"> Although all of we know this dream never gonna be true!!!</p><br><a href="surprise.html" class="btn">Click For A SURPRISE !!! </a>
        </div>
      </center>
</body>
</html>
