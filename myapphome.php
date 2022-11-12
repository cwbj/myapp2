<html>
    <head>
        <title>Book search</title>
        <style>
           .border1{
              background-color: honeydew;
              border-width: 3px;
              border-style: solid;
              border-color: #cc4343;
             width: 700px;
             height:auto;
             text-align:center;
             margin-left:auto;
             margin-right:auto;
             text-align:left;
            }
        </style>
    </head>

    <body style="background-color: azure;">
        <br>
    <div class="border1" style="text-align:center;">
        <h1 style="text-align:center;">Book search sestem</h1>

            <h2 style="text-align:center;">book registration</h2>
            <form action="myappreg.php" method="post" style="text-align:center;">
                <label>book name:</label>
                <input type="text" id="rname" name="rname"><br>
                <label>book number:</label>
                <input type="namber" id="rnum" name="rnum"><br>
                <p style="color:crimson">※Please enter only numbers for "book number".</p>
                <input type="submit" value="register">
            </form>

            <br>
           
            <br>

            <h2 style="text-align:center;">book search</h2>
            <form action="myappsearch.php" method="post" style="text-align:center;">
                <!-- <label>book name:</label> -->
                <input type="text" name="sname" onkeyup="myFunction()" id="myInput"><br>
                <!-- <label>book number:</label>
                <input type="namber" id="snum" name="snum"><br> -->
                <p style="color:crimson">※You can search by book number or book name.</p>
                <input type="submit" value="search"> 
            </form>

            
            <ul id="myUL">
                
            <?php
            $host ="localhost";
            $user ="root";  
            $pass = "";
            $database = 'myapp';   //Database Name
            
            /* mysqlと接続 */
            $conn = mysqli_connect($host,$user,$pass,$database);  
            
            $query="SELECT * FROM user";               // SQL query to fetch all table data
            $view_user= mysqli_query($conn,$query);    // sending the query to the database
        
/*
            while($row= mysqli_fetch_assoc($view_user)){
                $id = $row['rnum'];  
                echo '<li><a href="#">'.$id.'. '.$row["rname"].'</a></li>';
                }
            ?>

            </ul>
            
            </div>

            <script>
                function myFunction() {
                    // Declare variables
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('myInput');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName('li');
                
                    // Loop through all list items, and hide those who don't match the search query
                    for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                    }
                }
                </script>  
*/
?>

        </body>
  </html>
