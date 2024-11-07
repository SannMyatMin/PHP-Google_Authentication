
# PHP-Google Authentiation

Way to set up google authentication on projet with PHP.

User can use personal google account for services. 

Code will capture user credentials such as profile photo, name and mail.

## API Reference
Google API cliet library.




## Requirement
PHP 8.0 or higher.
## Things to do
1. Download "Google API Client Library"
https://github.com/googleapis/google-api-php-client

2. First need to set up OAuth credentials in the Google Developer Console.

* Go to Google Cloud Console: Visit Google CloudConsole, and log in with your Google account.

* Create a New Project (if you don’t have one): Enter project’s name and configure any other details, then click "Create."

* Enable the API: go to APIs & Services > Library. Search required api and click.

 * Create OAuth credentials. Then get "client Id" and "Client secret". Both need to be set up in php code. 

* Then copy the url of project page where google credentials are capture and paste in Oauth Credential client's authorised redirect url. That also need to be paste in code.

## About Code
* "Index.php" is the  page to run. 

* "gclient.php" is the page that connect to google api client library and create the url for google authentication with OAuth credentials.

* "GetUserGInfo.php" is the page where user    credentials are capture.

* "profile_pics" folder is the place where user profile pics store and then return
