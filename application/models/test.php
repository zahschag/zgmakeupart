<?php

 $hostname = "zgm1314306472882.db.11106870.hostedresource.com";
 $username = "zgm1314306472882";
 $dbname = "zgm1314306472882";

  $password = "GEt@clue14";
            $usertable = "wp_post";
            $yourfield = "post_title";

        
            //Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysql_select_db($dbname);

            //Fetching from your database table.
            $query = "SELECT * FROM $wp_post";
            $result = mysql_query($query);

            if ($result) {
                while($row = mysql_fetch_array($result)) {
                    $name = $row["$yourfield"];
                    echo "Name: $name<br>";
                }
            }
 