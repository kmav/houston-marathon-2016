{"filter":false,"title":"users.php","tooltip":"/users.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":65,"column":0},"action":"insert","lines":["<?php","    include('session.php');","?>","<!DOCTYPE html>","<html>","<head>","<title>User list</title>","<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Ubuntu\">","<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">","<script src=\"js/googleAnalytics.js\"></script>","","<link href=\"css/styled_login.css\" rel=\"stylesheet\" type=\"text/css\">","</head>","<body>","<h1>Bank of America Chicago Marathon 2015</h1>","<h2>Data Visualization System</h2>","","<div id=\"main\">","    <div id='login'>","        <h2 id=\"welcome\">Welcome : <?php echo $login_session; ?></h2>","        <h1></h1>","        ","        ","        <form action='index.php' method='post'>","            <input name='submit' type='submit' value=\"HOME\">","        </form>","    </div>","</div>","<div class=\"container\">","            <table class=\"table table-striped\">","                <thead>","                    <tr>","                        <th>Username</th>","                        <th>Level</th>","                        <th>Last Login</th>","                    </tr>","                </thead>","                <tbody>","        <?php","            $admin = \"bpeynetti\";","            if (strcmp($admin,$login_session)==0){","                //admin (bpeynetti) ","                //we list out the stuff","                $sql = \"select loginHistory.username user, login.level clearance, max(loginTime) lt from (loginHistory join login on login.username=loginHistory.username) group by login.username order by lt desc;\";","                $result = $db->query($sql);","                if ($result->num_rows>0){","                    $users = array();","                    while ($row = $result -> fetch_assoc()){","                        echo \"<tr><td>\";","                        array_push($users,$row['user']);","                        echo $row['user'].\"</td><td>\".$row['clearance'].\"</td><td>\".$row['lt'];","                        echo \"</tr>\";","                    }","                }","            }","            else {","                header(\"location: index.php\");","            }","        ?>","        ","            </tbody>","        </table>","        </div>","</body>","</html>",""],"id":1}]]},"ace":{"folds":[],"scrolltop":833.5,"scrollleft":0,"selection":{"start":{"row":65,"column":0},"end":{"row":65,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":51,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1452460324000,"hash":"b49b6365eae15ec16ed6d975642be4dc910793ed"}