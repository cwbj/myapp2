<html>
  <head>
    <title>book search</title>
    <style>
    <?php
      // function form(){
      //   ?>
      //   <table style="border:solid;border-color:green;display: inline;">
      //   <tr>
      //   <th>bookname</th>
      //   <th>booknumber</th>
      //   </tr>
      //   <a href= "#" ><tr><td>'.$id.'</td></tr></a>
      //   <tr style="width:auto;"><td>'.$row["rname"].'</td></tr>
      
      //   </table>
      // <?php
      // }
      
      
    ?> 
    </style>
  </head>
  <body style="background-color: azure;">
 <div>
    <h1 style="text-align:center;">search results</h1>
    <div style="vertical-align: middle;">
  
  
    


    <table style="border:solid;border-color:green;">
        <tr><th>bookname</th><th>booknumber</th></tr>

     <?php
     
      //form();


      ?><?php
            $host ="localhost";
            $user ="root";  
            $pass = "";
            $database = 'myapp';   //Database Name
            
            /* mysqlと接続 */
            $conn = mysqli_connect($host,$user,$pass,$database);  
            
            $query="SELECT * FROM user";               // SQL query to fetch all table data
            $view_user= mysqli_query($conn,$query);    // sending the query to the database
            
            while($row= mysqli_fetch_assoc($view_user)){
                $id = $row['rnum']; 
            
                echo '<tr style="border:solid;border-color:green;">
                  <a href="#">
                    <td>'.$id.'</td>
                    <td>'.$row["rname"].'</td>
                  </a>
                </tr>'; 
                ?>
                <br>
    <?php 
     }       
     ?>
    </table>

            </ul>
            
        

            <script>
                function myFunction() {
                    // Declare variables
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('myInput');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName('tr');
                
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
    </div>
  </div>
</body>
<html>