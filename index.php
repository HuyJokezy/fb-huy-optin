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
    console.log('Start')
    console.log(document.getElementsByClassName("fb-messenger-checkbox")[0].getAttribute("user_ref"));
    FB.AppEvents.logEvent('MessengerCheckboxUserConfirmation', null, {
        'app_id':'443404942707731',
        'page_id':'1789356631078933',
        'ref':'optinMessage',
        'user_ref':document.getElementsByClassName("fb-messenger-checkbox")[0].getAttribute("user_ref")
    });
    console.log('End')
}

</script>      

</head>
<body>
    <p id="optin">Optin random Here</p>
    <input type="button" onclick="confirmOptIn()" value="Confirm Opt-in"/>
    <a href="/static.php">Static optin</a>
<body>
<script>
    var element = document.createElement('div');
    element.attributes.class = 'fb-messenger-checkbox';
    element.attributes.origin = 'https://fb-optin-test.herokuapp.com/';
    element.attributes.page_id = '1789356631078933';
    element.attributes.messenger_app_id = '443404942707731';
    element.attributes.user_ref = new Date().getTime().toString();
    element.attributes.prechecked = "true";
    element.attributes.allow_login = "true";
    element.attributes.size = "large";
    document.getElementById('optin').appendChild(element);
</script>
</html>



