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
        <title>SubDomain Finder</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/script.js"></script>
</head>
<body>
        <div class="header">
                <h1>* Web Hacking Tool *</h1><span>version 1.0</span>
                <p>[~] Author : <a href="http://github.com/MR-KaBuD">http://github.com/MR-KaBuD</a></p> (Iranian Hackers)
                <h2>Sub Domain Finder</h2>
        </div>
        <section class="mod model-1">
                <div class="spinner"></div>
        </section>
        <?php
        error_reporting(0);

        if(isset($_GET['url'])){
                $url = $_GET['url'];
        ?>
                <script>
                        $.get('http://api.hackertarget.com/hostsearch/', {'q':'<?php echo $url ?>'}, function(data){
                                $('pre').text(data)
                        })
                        $(document)
                        .ajaxStart(function(){
                                $('section').show();
                        })
                        .ajaxStop(function(){
                                $('section').hide();
                        });
                </script>

        <?php
        }
        ?>
        
        <pre>

        </pre>
</body>
</html>

