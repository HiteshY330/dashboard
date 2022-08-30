<?php 
include('header.php');
include('connection.php');

$sql="SELECT * FROM member";
$res=mysqli_query($con,$sql);
?>


<div class="main-panel">



    <table class="table mt-2" id="myTable">
        <thead class="thead-dark">
            <tr class="bg-secondary">
                <th scope="col">#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Assigned To</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><button type="button" class="btn btn-success h-28 w-100">Search</button></th>
                <td><input class="h-28 w-100 border-1" style="display: table-cell;" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" style="display: table-cell;" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" type="text" id="myInput" onkeyup="myFunction()"></td>
                <td><input class="h-28 w-100" type="text" id="myInput" onkeyup="myFunction()"></td>

            </tr>

            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($res)) { ?>

                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['company']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['website']; ?></td>
                    <td><?php echo $row['assigned_to']; ?></td>
                    

                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
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
    </script>
<?php include "footer.php" ?>