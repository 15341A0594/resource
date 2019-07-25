<html>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('search1.png');
  background-position: 1px 1px;
  background-position: right;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: rounded;
  border-radius: 25px;
  margin-bottom: 12px;
border-style: rounded;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
    <body>

        <?php
        $con=  mysqli_connect("localhost", "root", "", "resource");
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from status");
       ?>
        <div>

            <td><center><h2>Employee Status</h2></center></td>
       <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for Employee.." title="Type in a name"><br>
<div align=right >
<input type = "button" value = "Print" onclick = "printDiv('print-area')" />
</div>
<div id="print-area">
 <form >

         <table id="myTable" border=1 align=center style="background-color:#ccccff">
         <tr>
            
                    <th style="color:blue">Employee Id</th>
                    <th style="color:blue">Employee Name</th>
                     <th style="color:blue">Status</th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['empid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['status']; ?></td>
                
            </tr>
        <?php
             }
             ?>
             </table>
</form>
</div>
            </div>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
      w=window.open();
      w.document.write(printContents);
      w.print();
      w.close();

   
}


</script>

    </body>
</html>
