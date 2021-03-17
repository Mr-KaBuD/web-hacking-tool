<!-- 
        ===============================
        *       Web Hacking Tools     *
        *       v.1                   *
        *   By : github.com/MR-KaBuD  *
        ===============================
 -->

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Finder</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/script.js"></script>
</head>
<body>
        <div class="header">
                <h1>* Web Hacking Tool *</h1><span>version 1.0</span>
                <p>[~] Author : <a href="http://github.com/MR-KaBuD">http://github.com/MR-KaBuD</a></p> (Iranian Hackers)
                <h2>Admin Finder</h2>
        </div>
        <section class="mod model-1">
                <div class="spinner"></div>
        </section>
        <?php
        error_reporting(0);

        if(isset($_GET['url'])){
                $url = $_GET['url'];
                $url = str_replace('http://','',$url);
                $url = str_replace('https://','',$url);
                $url = str_replace('www.','',$url);
                $url = addslashes(htmlentities($url));
                $dirs = ['login.php', 'admin', 'login', 'admin/login', 'admin/login.php', 'robots.txt', 'admin.php', 'admin/dashboard.php', 'admin/dashboard', 'administrator', 'panel', 'adm', 'admin1', 'admin2', 'login.html', 'pages/admin', 'account', 'user/admin', 'user/admin.php', 'cp', 'cp.php', 'admin/cp.php', 'cp.asp', 'cp.aspx', 'control', 'control.php', 'control.asp', 'control.aspx', 'controlpanel', 'control-panel', 'admincp', 'administrator/login.asp', 'administrator/login.aspx', 'admin/upload', 'admin/upload.php', 'adminpanel', 'adminpanel.php', 'adminpanel.asp', 'adminpanel.aspx', 'panel-administration', 'panel-administrator', 'administrator/upload.php', 'administrator/upload.aspx', 'user', 'users', 'user/login', 'user/login.php', 'upload', 'upload.php', 'login.aspx', 'admin.aspx', 'login.asp', 'admin.asp', 'admin/index.asp', 'admin/index.aspx', 'admin/login.asp', 'admin/login.aspx', 'adminarea', 'webadmin', 'adminLogin', 'admin_area', 'adminpanel', 'admin-panel', 'admin_panel', 'blogadmin', 'auth', 'auth/login', 'auth/admin', 'account.aspx'];


                foreach($dirs as $dir){
                        $site = "http://" . $url . "/" . $dir;
                        $a = get_headers($site);
                        if(in_array("HTTP/1.1 200 OK",$a)){
                                echo " <br> <a href='" .$site."' target='_blank'> [+] " . $site . "</a>";
                                // array_push($ok, $site);
                        }
                        // elseif(in_array("HTTP/1.1 302 Found",$a)){
                        //         echo " <br> <a href='" .$site."' target='_blank'> [+] " . $site . "</a>";
                        // }
                }
        
                // foreach ($dirs as $dirr){
                //         $site = "http://" . $url . "/" . $dirr;
                //         $handle = curl_init($site);
                //         curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                //         $response = curl_exec($handle);
                //         $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                // if ($httpCode == 200){
                //         echo $site . ":" ."Found! <br>";
                // }
                // else{
                //         echo $site . ": HTTP Response: " . $httpCode;
                // }
                //     curl_close($handle);
                // }
        }
        
        ?>
</body>
</html>
