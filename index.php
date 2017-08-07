<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script>
window.fbAsyncInit = function() {
    FB.init({
        appId      : '443404942707731',
        xfbml      : true,
        version    : 'v2.6'
    });

    FB.Event.subscribe('messenger_checkbox', function(e) {
        console.log("messenger_checkbox event");
        console.log(e);

        if (e.event == 'rendered') {
            console.log("Plugin was rendered");
        } else if (e.event == 'checkbox') {
            var checkboxState = e.state;
            console.log("Checkbox state: " + checkboxState);
        } else if (e.event == 'not_you') {
            console.log("User clicked 'not you'");
        } else if (e.event == 'hidden') {
            console.log("Plugin was hidden");
        }
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

function confirmOptIn() {
    FB.AppEvents.logEvent('MessengerCheckboxUserConfirmation', null, {
        'app_id':'443404942707731',
        'page_id':'505746129766933',
        'ref':'dms-optin',
        'user_ref':'<?=$random_val?>'
    });
}
</script>      

</head>
<body>
<p>Optin Here</p>
  <div class="fb-messenger-checkbox"
origin=https://stablevehiclecontracts.co.uk/checkbox3.php 
page_id=505746129766933 
messenger_app_id=443404942707731 
user_ref="<?=$random_val?>" 
prechecked="true" 
allow_login="true" 
size="large"> </div>
<body>
    <input type="button" onclick="confirmOptIn()" value="Confirm Opt-in"/>
</body>
</body>
</html>

<?php $random_val=rand(100000,999999);?>

