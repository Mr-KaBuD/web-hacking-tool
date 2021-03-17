<!-- 
        ===============================
        *       Web Hacking Tools     *
        *       v.1                   *
        *    By : github.com/MR-KaBuD    *
        ===============================
 -->

<?php
        if(isset($_POST['search'])){
                $url = addslashes(htmlentities($_POST['search']));
                $api = file_get_contents('https://api.hackertarget.com/reverseiplookup/?q='.$url);
                
                $error   = 'No DNS A records found for';
                $pos = strpos($api, $error);

                if ($pos !== false) {
                        $api = "";
                        $error_handel = "No DNS A records found for ".$url;
                }
                
                elseif($api == "API count exceeded - Increase Quota with Membership"){
                        $api = "";
                        $error_handel = "please Try Again After ...";
                }
                $api = explode("\n",$api);
                // var_dump($api);
                
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB Hacking Tool</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="header">
                <h1>* Web Hacking Tool *</h1><span>version 1.0</span>
                <p>[~] Author : <a href="http://github.com/MR-KaBuD">http://github.com/MR-KaBuD</a></p> (Iranian Hackers)
        </div>

        <form method="post">
                <div class="search">
                        <input type="text" name="search" id="" placeholder="Enter The Target URL :">
                        <button type="submit">Search !</button>
                </div>
        </form>

        <div class="error">
                <?php if(isset($error_handel)){
                        die($error_handel); 
                }?>
        </div>

        <p class="row"> &nbsp; # Web sites on Server </p>
        <div class="main">
<?php
        if(isset($_POST['search'])){
                foreach($api as $reverse){
?>
                <div class="tables">
                        <a href="http://<?php echo $reverse; ?>" target="_blank"><p><?php echo $reverse; ?></p></a>
                        <a href="whois.php?url=<?php echo $reverse; ?>" target="_blank">
                                <div class="box">Whois</div>
                        </a>
                        <a href="admin.php?url=<?php echo $reverse; ?>" target="_blank">
                                <div class="box">Admin Page Finder</div>
                        </a>
                        <a href='https://www.google.com/search?q=site:"<?php echo $reverse; ?>"+inurl:.php?&sourceid=chrome&ie=UTF-8' target="_blank">
                                
                                <div class="box">Injection Test</div>
                        </a>
                        <a href="sub.php?url=<?php echo $reverse; ?>" target="_blank">
                                <div class="box">Sub Domain Finder</div>
                        </a>
                </div>

<?php
                }
        }
?>
                
                
        </div>
<!-- MR-KaBuD -->
</body>
</html>