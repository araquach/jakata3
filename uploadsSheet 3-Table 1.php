<?php
                $paramsArray = array(
                    "table"=>"feedback_client",
                    "delimiter"=>",",
		    "textDelimiter"=>"\"",
                    "mode"=>1,
                    "perRequest"=>10,
                    "csvKey"=>"1",
                    "tableKey"=>"id",
                    "columns"=>array(
                        "id"=>1, "iris_id"=>1, "stylist"=>5, "first_name"=>2, "last_name"=>3, "mobile"=>4, 
                    ),
                );
            ?>