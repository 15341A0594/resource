

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
            $con=  mysqli_query($con, "select * from record");
       ?>

        
            <td><center><h2>Employee Details</h2></center></td>
       <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for Skills.." title="Type in a name">
<div align=right >
<input type = "button" value = "Print" onclick = "printDiv('print-area')" />
</div>
    <div id="print-area">
         <table id="myTable" border=1 align=center style="background-color:#ccccff">
         <tr>
            <th style="color:blue"> Candidate Name</th>
                    <th style="color:blue">Experience</th>
                    <th style="color:blue">Skills</th>
                     <th style="color:blue">Mobile No</th>
                    <th style="color:blue">Email Id</th>
                    <th style="color:blue">Client</th>
                    <th style="color:blue">Resume</th>
                  

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['expr']; ?></td>
                <td><?php echo $row['skills']; ?></td>
                <td><?php echo $row['tel'] ;?></td>
                <td><?php echo $row['email'] ;?></td>
                <td><?php echo $row['client'] ;?></td>
                <td><?php echo $row['file'] ;?></td>
               
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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


