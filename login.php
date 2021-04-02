<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    <meta name="supported-color-schemes" content="dark light">
    <meta name="color-scheme" content="dark light">
    <meta name="theme-color" content="">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel="stylesheet">
    <title>Isna Prasetyo</title>

	<link rel="manifest" href="manifest-light.webmanifest" data-href-light="manifest-light.webmanifest" data-href-dark="manifest-dark.webmanifest">      
    <link rel="icon" href="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-light="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-dark="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Fdark.png" sizes="144x144">
    <script type="module" src="https://googlechromelabs.github.io/dark-mode-toggle/src/dark-mode-toggle.mjs"></script> 
    <script>
	if (!window.matchMedia('(prefers-color-scheme)').matches) {
		document.documentElement.style.display = 'none';
		document.head.insertAdjacentHTML(
		    'beforeend',
		    '<link rel="stylesheet" href="light.css" onload="document.documentElement.style.display = ``">'
		);
	}
	const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
	darkModeMediaQuery.addListener((e) => {
		const darkModeOn = e.matches;
		console.log(`Dark mode is ${darkModeOn ? '🌒 on' : '☀️ off'}.`);
	});
    </script> 
	<style>
		fieldset {
		  background-color: gainsboro;
		}
		@media (prefers-color-scheme: dark) {
		  fieldset {
		    background-color: darkslategray;
		  }
		}
	</style>
	<meta name="google-signin-client_id" content="921242163893-q95r04dkqhm7vhk6gr7c74p2pj49u8g1.apps.googleusercontent.com">
	<link rel="stylesheet" href="assets/css/dark.css" media="(prefers-color-scheme: dark)">
	<link rel="stylesheet" href="assets/css/light.css" media="(prefers-color-scheme: light)">
	<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body style="font-family: 'Spartan', sans-serif; " class="scrollbar">
  	<div class="container my-5">
  		<div class="row">
  			<div class="col-6 mx-auto">
		  		<div class="card">
		  			<div class="card-body">
		  				<div class="heading mb-5">
			  				<h1>Welcome Back :)</h1>
			  				<p>To keep connected with us, please login with your personal information by email address and password 🔔</p>
			  			</div>
						<form>
						  <!-- Email input -->
						  <div class="form-outline mb-4">
						    <input type="email" id="form1Example1" class="form-control" />
						    <label class="form-label" for="form1Example1">Email address</label>
						  </div>

						  <!-- Password input -->
						  <div class="form-outline mb-4">
						    <input type="password" id="form1Example2" class="form-control" />
						    <label class="form-label" for="form1Example2">Password</label>
						  </div>

						  <!-- 2 column grid layout for inline styling -->
						  <div class="row mb-4">
						    <div class="col d-flex justify-content-center">
						      <!-- Checkbox -->
						      <div class="form-check">
						        <input
						          class="form-check-input"
						          type="checkbox"
						          value=""
						          id="form1Example3"
						          checked
						        />
						        <label class="form-check-label" for="form1Example3"> Remember me </label>
						      </div>
						    </div>

						    <div class="col">
						      <!-- Simple link -->
						      <a href="#!">Forgot password?</a>
						    </div>
						  </div>

						  <!-- Submit button -->
						  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
						  <div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"></script>
    <!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<!-- Google -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- app -->
	<script type="text/javascript" src="assets/js/app.js"></script>
  </body>
</html>