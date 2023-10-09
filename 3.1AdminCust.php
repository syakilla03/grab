<!DOCTYPE html>
<html>

<head>
    <title>Student Grab Service Customer Details</title>
    <link rel="stylesheet" href="CSS_AdminStyle.css">
    <style>
        /* Add your additional CSS styles here, if needed */
    </style>
</head>

<body>
    <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:150px; width:150px">
    <b style="font-size:30px; font-family:impact; color:white; margin-left:400px;">Student Grab Service Customer Details</b>
    <br><br>
    <form method="POST">
        <input style="background-color:#00008B; color:white;" type="submit" value="Add Customer" name="AddCust">
    </form>

    <form method="post">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>
    </form>

    <?php
    if (isset($_POST['AddCust'])) {
        header('Location:3.1AddCustomer.php');
    }

    // Function to connect and execute the query
    function filterTable($query)
    {
        $db = mysqli_connect("localhost", "root", "", "studentgrab");
        $filter_Result = mysqli_query($db, $query);
        return $filter_Result;
    }

    $search_result = null; // Initialize $search_result to null
    if (isset($_POST['search'])) {
        $valueToSearch = $_POST['valueToSearch'];
        $query = "SELECT * FROM customer WHERE CONCAT(cust_ID, matricNO, cust_name, cust_phone_number) LIKE '%" . $valueToSearch . "%'";
        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM customer";
        $search_result = filterTable($query);
    }

    if (mysqli_num_rows($search_result) > 0) {
        echo '<table align="center" cellspacing="5">';
        echo '<tr style="color:white; font-family:impact; background-color:DarkBlue; text-align:center;">';
        echo '<td style="width:50px;"> Number</td>';
        echo '<td style="width:150px;">Customer ID</td>';
		echo '<td> Matrix No </td>';
        echo '<td style="width:300px;">Name</td>';
        echo '<td style="width:150px;">Phone Number</td>';
        echo '<td style="width:600px;" colspan="3">Action</td>';
        echo '</tr>';

        $num = 0; // Initialize $num
        while ($row1 = mysqli_fetch_array($search_result, MYSQLI_ASSOC)) {
            $C_ID =  $row1['cust_ID'];
            $C_password = $row1['password'];
            $C_pnum = $row1['cust_phone_number'];
            $C_name = $row1['cust_name'];
            $C_email = $row1['email'];
            $C_matric = $row1['matricNO'];
            $num++;

            echo '<tr style="font-family:monospace;  text-align:center; font-size:15;  ">';
            echo '<td style="width:50; ">' . $num . '</td>';
            echo '<td style="width:150;">' . $C_ID . '</td>';
            echo '<td style="width:250;">' . $C_matric . '</td>';
            echo '<td style="width:300;">' . $C_name . '</td>';
            echo '<td style="width:150;">' . $C_pnum . '</td>';

            echo '<td style="width:100;"><a href="3.1viewCustomer.php?idCust=' . $row1['cust_ID'] . '"><input type="submit" value="view" style="background-color:#488AC7;"></a></td>';
            echo '<td style="width:100;"><a href="3.1EditCustAdmin.php?idCust=' . $row1['cust_ID'] . '"><input type="submit" value="edit" style="background-color:#00A36C;"></a></td>';
            echo '<td style="width:100;"><a href="3.1deleteCust.php?idCust=' . $row1['cust_ID'] . '" onclick="return confirm(\'Are you sure you want to delete this customer?\')"><input type="submit" value="delete" style="background-color:#E41B17;"></a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<div style="text-align:center; margin-top: 20px; font-size: 18px;">No records were found.</div>';
    }
    ?>
    
    <table align="center" cellspacing="5">
        <tr style="background-color:DarkBlue; text-align:center;height:20; ">
            <td style="width:50; "></td>
            <td style="width:150;"></td>
            <td style="width:250; "></td>
            <td style="width:300; "></td>
            <td style="width:150; "></td>
            <td style="width:300; "></td>
        </tr>
    </table>

    <?php
    if (isset($_GET['delete_message'])) {
        $message = $_GET['delete_message'];
        echo '<script>alert("' . $message . '");</script>';
    }

    if (isset($_GET['update_message'])) {
        $message = $_GET['update_message'];
        echo '<script>alert("' . $message . '");</script>';
    }

    if (isset($_GET['AddCust_message'])) {
        $message = $_GET['AddCust_message'];
        echo '<script>alert("' . $message . '");</script>';
    }
    ?>
</body>

</html>
