<!DOCTYPE html>
<html>
    <body>
        <p><b>Client side an server side script</b></p>
        <script type="text/javascript">
            document.write("Client's date :"+Date()+"<br/>");  //client
        </script>
        <?php
            date_default_timezone_set("Asia/Calcutta");    //server
            echo "server's date is ". date("Y-m-d");
            echo "The time is ". date("h:i:sa");
        ?>
    </body>
</html>