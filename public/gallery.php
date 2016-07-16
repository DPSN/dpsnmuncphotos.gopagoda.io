<?php
if(isset($_GET['cam']) == false) {
    die("Something went wrong! :(");
}

$names = array('dd' => "Daisy Ma\'am", 'bd' => "Binod Sir", 'sb' => "Souvik Bhattacharya", 'sk' => "Soumojit Karar", 'as' => "Adreesh Sen", 'ar' => "Arka Routh", 'ak' => "Anish Kumar", 'ag' => "Arunabha Goswami");
$folders = array('dd' => "daisydeb", 'bd' => "binodsir", 'sb' => "souvikbhattacharya", 'sk' => "soumojitkarar", 'as' => "adreeshsen", 'ar' => "arkarouth", 'ak' => "anishkumar", 'ag' => "arunabhagoswami");

$cam = $_GET['cam'];

if(isset($names[$cam]) == false) {
    die("Something went wrong! :(");
}

$cameraman = $names[$cam];
$folder = $folders[$cam];

function listPhotos($foldername) {
    $ar = scandir("imagestore/".$foldername);
    foreach ($ar as $file) {
        $lowfile = strtolower($file);
        if(substr($lowfile, strlen($lowfile) - 4, 4) != '.jpg') continue;
        $thumbnaillink = "thumbnail.php?folder=".$foldername."&img=".$file;
        $fulllink = "imagestore/".$foldername."/".$file;
        $string = "<a href=\"".$fulllink."\"><img src=\"".$thumbnaillink."\" class=\"img\">".$file."<br></li></a>\n";
        echo $string;
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Photos by <?php echo $cameraman; ?>| Delhi Public School Newtown Model United Nations Conference 2016</title>
        <meta name="viewport" content="width=device-width, user-scalable=yes" />
        <meta name="theme-color" content="#336" />
        <meta name="author" content="SwG Ghosh" />
        <meta name="description" content="#mune, All your favourite photos!" />
        <meta name="google-site-verification" content="rL_-1teFqk4E2_AgY1htKpYS7Ve4RNIIMbaHlVP7-9k" />
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="base.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div id="navbar">
                <ul>
                    <li id="regp"><a href="/">DPSNMUNC'16<br><small>Photo Gallery</small></a></li>
                    <li id="website"><a href="http://www.dpsnmunc.in">Visit<br><small>www.dpsnmunc.in</small></a></li>
                    <li id="fb"><a href="https://facebook.com/dpsnmunc16">facebook<br><small><img src="images/facebook-logo.png" id="fblogo">/dpsnmunc16</small></a></li>
                </ul>
            </div>
        </header>
        <div id="content">
            <br>
            <span>#mune</span>
            <h1><span id="img"><img src="images/logo.png"></span><br><span id="xterm"><?php echo $cameraman; ?></span></h1>
            <p>
                <span>Memories at DPSNMUNC'16.</span>
                <ul class="folders" style="padding-left: 0;">
                    <?php listPhotos($folder); ?>
                </ul>
            </p>
            <br>
        </div>
        <footer>
            <div class="foot">
                <br><br><br>
                <h1>Thanks for stopping by!</h1>
                <p>
                  We'd love to see you again.<br>See our open-source projects on <a href="https://github.com/DPSN">GitHub</a>.<br>
                </p>
                <br>
                <p class="copyright">
                    &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br>
                    <br>Photo Uploads by <a href="https://www.facebook.com/Anarghya.Das">Anarghya Das</a><br>(email: <a href="mailto:anarghya@photos.dpsnmunc.in">anarghya@photos.dpsnmunc.in</a>)<br><br>
                    Designed and Developed by <a href="https://github.com/swghosh">Swarup Ghosh</a>.<br>
                    <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <br><br>
                </p>
            </div>
        </footer>
    </body>
</html>
