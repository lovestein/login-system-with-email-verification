<?php
include ('../conn/conn.php');

if (isset($_POST['delete'])) {
    $tbl_user_id = $_POST['tbl_user_id'];

    try {

        $query = "DELETE FROM `tbl_user` WHERE `tbl_user_id` = $tbl_user_id";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            echo "
            <script>
                alert('User Deleted Successfully');
                window.location.href = 'http://localhost/login-system-with-email-verification/home.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('User to Delete Subject');
                window.location.href = 'http://localhost/login-system-with-email-verification/home.php';
            </script>
            ";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>