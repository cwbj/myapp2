<html>
  <head>
    <title>book registration</title>
  </head>
  <body style="background-color: azure;">

  <?php


/* サーバー指定 */
$host ="localhost";
$user ="root";  
$pass = "";
$database = 'myapp';   //Database Name

/* mysqlと接続 */
$conn = mysqli_connect($host,$user,$pass,$database);   

/* mysqlとの接続確認 */
if(!$conn){
  die("Connection error")
  ?>
  <button onclick="location.href='myapphome.php'">back</button>
<?php
}

$rname = $_POST['rname'];
$rnum = $_POST['rnum'];

$query= "INSERT INTO user(rname, rnum) VALUES('{$rname}','{$rnum}')";//データベースuserに入力指示
    $add_user = mysqli_query($conn,$query);

// POSTの受け取りテスト用
//var_dump($rname);
//var_dump($rnum);　　

if (!$add_user) {
  echo "something went wrong ". mysqli_error($conn);
} else { 
    echo "<script type='text/javascript'>alert('User added successfully!')</script>";
}


if(!null == $rname){
  if (isset($rnum)) {
    $rnum = $rnum;

    if(is_int(!$rnum)){
    echo"Please enter only numbers for 'book number'";
  ?>
     <br><button onclick="location.href='myapphome.php'">back</button>
  <?php
  }


  }else{
    $rnum = null;
  }

  if($rnum == null){
    echo"Please enter only numbers for 'book number'";
  ?>
    <br> <button onclick="location.href='myapphome.php'">back</button>
  <?php
    }else{
  ?>

  <form action="myapp.js" method="post">
  <input type="hidden" name="rname" value="<?php echo $rname; ?>">
  <input type="hidden" name="rnum" value="<?php echo $rnum; ?>">
  </form>

  <table id="myappreg_tr" style="text-align:center;">
    <script src="myapp.js"></script> 
      <th>book name <th> </th> <th>book ID</th>
  </tr>
  </table>
  <?php
  }
}else{
  echo"put word in bookname."
  ?>
  <br> <button onclick="location.href='myapphome.php'">back</button>
  <?php
}
?> 



</body>
</html>