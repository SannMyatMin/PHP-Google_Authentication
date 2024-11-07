<?php 

    require_once "gClient.php";
    
    if (isset($_GET['code'])) {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION["access_token"] = $token;
    }
    
    if (isset($_SESSION["access_token"])) {
        $gClient->setAccessToken($_SESSION["access_token"]);
    
        // Google_Oauth_Service should be Google_Service_Oauth2 in the newer Google API Client
        $oauth2 = new Google_Service_Oauth2($gClient);
        $UserInfo = $oauth2->userinfo->get();

        $picture_url = $UserInfo->picture;
        $directory = 'profile_pics/';
        $imgContent = file_get_contents($picture_url);
        if (!file_exists($directory))
        {
            mkdir($directory, 0755, true);
        };
        $ImgPath = $directory . $UserInfo->id . '.jpg';
        file_put_contents($ImgPath, $imgContent);

        $UserName = $UserInfo->name;
        $UserMail = $UserInfo->email;


    }
    else
    {
        echo "Error";
    };
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Google Account Info</title>

        <style>
            body
            {
                margin-top: 3%;
                margin-left: 40%;
            }
            img
            {
                width: 360px; 
                height: 360px;
            }
            p
            {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        
        <?php 
          echo "<img src='$ImgPath'>";
          echo "<br><br>";
            
          echo "<p>User name = ".$UserName."</p>";

          echo "<p>User gmail = ".$UserMail."</p>";
        ?>

    </body>
    </html>

