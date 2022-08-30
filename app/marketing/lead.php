<?php include "header.php" ?>
<script>
    $(document).ready(function(){
        $('#userDataList').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":'fetchData.php'
        });
    });
</script>
<!-- partial -->
<div class="main-panel">
    <div class="contanier">
        <table id="userDataList" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Assigned To</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Assigned To</th>
            </tr>
        </tfoot>
    </table>
    </div>

<!-- partial:partials -->

<?php include "footer.php" ?>          