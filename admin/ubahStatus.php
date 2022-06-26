<?php
session_start();
          if (isset($_GET["id"]))
          $id_driver = $_GET['id'];
          {
            $url = "http://localhost:3002/api/admin/drivers/$id_driver";
            $header = array(
              "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYyOWQ1NmUzNmRlMjFiYzNjYjJlMTY1ZCIsImVtYWlsIjoiYWRtaW5AZ21haWwuY29tIiwiaWF0IjoxNjU0NTY0OTI5fQ.5q4MY7ey5JgL17TYP0HViM9UQN9leWbfK6rJwtJfOtM"
            );

            $array = array(
                "driverId" => $id_driver,
                "status" => 'Accepted'
            );
            $data = http_build_query($array);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $output = curl_exec($ch);
            if ($e = curl_error($ch)){
                echo $e;
            }
            else {
                echo "<script>alert('data berhasil diupdate')</script>";
				echo "<script>location='reqruitment.php';</script>";
            }
            curl_close($ch);
        }
        ?>