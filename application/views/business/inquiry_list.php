<!--inquiry list  page content -->


<div class="right_col" role="main">
    <div class="">
<div class="panel panel-default" style="margin-top: 20px">
    <div class="panel-body">

        <table class="table table-striped">
            <thead>
            <tr>

                <th>User Id</th>
                <th>message</th>
                <th>date & time </th>


            </tr>
            </thead>
            <tbody>



            <?php

foreach ($inq_info->result_array() as $row) {
	?>
                <tr>
                    <div class="form-group">
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['datetime']; ?></td>
                    </div>
                </tr>
                </tbody>

            <?php }?>
        </table>

    </div>

</div>


</div>
</div>



