<!DOCTYPE html>
<html>
  <head>
    <title>Barista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="964275329198-kcilk4pqtfvmajq7htgpin8v6f8n4nnf.apps.googleusercontent.com">
    <!-- Bootstrap -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
