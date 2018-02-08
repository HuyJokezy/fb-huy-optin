<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script>
  window.fbAsyncInit = function() {
      FB.init({
          appId      : '443404942707731',
          xfbml      : true,
          version    : 'v2.11'
      });
  };

  (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk')
  );
  var script = document.createElement('script');
  script.innerHTML = `var chatPlugin = document.createElement('div');
  chatPlugin.setAttribute('class', 'fb-customerchat');
  chatPlugin.setAttribute('page_id', '1789356631078933');
  chatPlugin.setAttribute('ref', '${new Date().getTime().toString()}');
  chatPlugin.setAttribute('logged_in_greeting', 'Hello logged_in');
  chatPlugin.setAttribute('logged_out_greeting', 'Hello logged_out');
  document.body.appendChild(chatPlugin);`;
  var isScriptLoad = false;
  var loadScript = function (script) {
    if (document.body !== undefined) {
      document.body.appendChild(script);
      isScriptLoad = true;
    }
  }
  while (!isScriptLoad) {
    loadScript(script);
  }

</script>      

</head>
<body>
  <!-- <script>
  var chatPlugin = document.createElement('div');
  chatPlugin.setAttribute('class', 'fb-customerchat');
  chatPlugin.setAttribute('page_id', '1789356631078933');
  chatPlugin.setAttribute('ref', new Date().getTime().toString());
  chatPlugin.setAttribute('logged_in_greeting', 'Hello logged_in');
  chatPlugin.setAttribute('logged_out_greeting', 'Hello logged_out');
  document.body.appendChild(chatPlugin);
  </script> -->
<body>
</html>



