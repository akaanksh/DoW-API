<html>
<head>
	<link rel="stylesheet" href="https://unpkg.com/wingcss"/>

	<title>Down or What? (DoW) - Demo</title>
</head>
<body class="body">
		<h2><center>Down or What? (DoW) - Demo<center></h2><br>
		<div class="row">
    	<input class="col-8" id="siteEntered" type="text" placeholder="http:// or https://">
			<button class="col-4" onClick="submitSite()">Get Site Response Code</button><br>
		</div>
    <span id="site">Site: </span><br>
    <span id="status">Status: </span><br>
    <span id="rCode">Response Code: </span><br>
    <span id="abtCode">What the Code Means: </span><br>
    <span id="fix">Fix: </span><br><br><br>
		
		<h4>About</h4>
		<p>Used to demonstrate how DoW (not the final name) works. Enter any URL into the textbox and see the Status, Response Code, What the Code Means and a Possible Fix (if any).</p>
		<h4>Testing</h4>
		<p>To test error codes, you can do this: <code>https://api.dow.akaanksh.ga/test-codes?code=&lt;any-reponse-code&gt;</code></p>
		<h4>API</h4>
		<p>API is currently open to anyone and you don't need an API key.<br>
		STEPS:<br>
		1. Just perform a GET request to <code>https://api.dow.akaanksh.ga/?site=&lt;site-name-entered-by-user&gt;</code><br>
		2. The Server will return JSON like this: (Ex: https://www.google.com)<br>
		<pre><code>{
  "status": "Up",
  "code": "200", 
  "codeMeaning": "OK", 
  "inDepth": "Everything is operational", 
  "possibleFix": "None" 
}</code></pre><br>
		3. All you have to do is Parse the JSON.<br>
		If you are interested, do Ctrl+U to check out this page's source code.<br>
		</p>
		<br>
		<p>Made by Akaanksh. This is not the final design of the page. Much more to come.<br>
		P.S. All of this (so far) was made in 6 hours!</p>

		<style>
			* {
				margin: 0;
			}
			.body {
				max-width: 860px;
				margin: 2rem auto;
			}
		</style>
</body>

<script>
  function submitSite(){
  	var siteEntered = document.getElementById("siteEntered");
    var s = siteEntered.value;
    
    var site = document.getElementById("site");
    site.innerText = "Site: "+s;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var responses = JSON.parse(this.responseText);
        document.getElementById("status").innerText = "Status: "+ responses.status;
        document.getElementById("rCode").innerText = 'Response Code: '+ responses.code + ' - ' + responses.codeMeaning;
        document.getElementById("abtCode").innerText = "What the Code Means: "+ responses.inDepth;
        document.getElementById("fix").innerText = "Possible Fix: "+ responses.possibleFix;
      }
    };
    xmlhttp.open("GET", "https://api.dow.akaanksh.ga/?site="+s, true);
    xmlhttp.send();
  }
</script>    

</html>
