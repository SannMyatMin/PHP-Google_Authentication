<?php 

require_once "gClient.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Button</title>

<style>

    .oauthButton {
      display: flex;
      outline: 2px solid black;
      margin-left: 40%;
      margin-top: 10%;
      justify-content: center;
      align-items: center;
      gap: 10px;
      padding: auto 20px 20px auto;
      width: 300px; /* Increased width */
      height: 50px; /* Increased height */
      border-radius: 5px;
      border: 2px solid var(--main-color);
      background-color: var(--bg-color);
      box-shadow: 4px 4px var(--main-color);
      font-size: 18px; /* Increased font size */
      font-weight: 600;
      color: var(--font-color);
      cursor: pointer;
      transition: all 250ms;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .oauthButton::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 0;
      background-color: #212121;
      z-index: -1;
      -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
      box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
      transition: all 250ms;
    }

    .oauthButton:hover {
      color: #e8e8e8;
    }

    .oauthButton:hover::before {
      width: 100%;
    }

    .icon {
      width: 2rem; /* Increased icon width */
      height: 2rem; /* Increased icon height */
    }

</style>

</head>
<body>
<button class="oauthButton" type="button" onclick="window.location = '<?php echo $GoogleUrl; ?>'">
    <svg class="icon" viewBox="0 0 24 24">
        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
        <path d="M1 1h22v22H1z" fill="none"></path>
    </svg>
    Continue with Google
</button>
</body>
</html>