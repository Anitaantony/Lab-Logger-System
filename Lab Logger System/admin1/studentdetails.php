<html>
    <head>
    </head>
    <body>
        <?php
            include("dbconn.php");
        ?>
        <section>
            <?php
                $sql="select * from student order by AdmissionNumber asc";
                $query=mysql_query($sql);
            ?>
            <center><h3 class="heads1">STUDENT DETAILS</h3></center>
            <div class="outer-wrapper">
                <div class="table-wrapper">
                <table class="table" align="center" border="1" cellpadding="5" cellspacing="0">
                    <tr class="tr">
                        <th class="th">Admission Number</th>
                        <th class="th">Name</th>
                        <th class="th">Contact</th>
                        <th class="th">Email</th>
                        <th class="th">Course</th>
                        <th class="th">Batch</th>
                        <th class="th">Year</th>
                    </tr>
                    <?php
                    while($row=mysql_fetch_array($query))
                    {
                    ?>
                        <tr class="tr">
                            <td class="td"><?php echo $row[0] ?></td>
                            <td class="td"><?php echo $row[1] ?></td>
                            <td class="td"><?php echo $row[3] ?></td>
                            <td class="td"><?php echo $row[4] ?></td>
                            <td class="td"><?php echo $row[5] ?></td>
                            <td class="td"><?php echo $row[6] ?></td>
                            <td class="td"><?php echo $row[7] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                </div>
            </div>
        </section>
    </body>
</html>
