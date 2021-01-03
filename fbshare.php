<html>
<head>
<title>FB sharere</title>
<!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->

<meta property="og:url"           	content="https://lom13.github.io/fbshare.html" />
<meta property="og:title"         	content="Expecting model title test" />
<meta property="og:description"   	content="Number One model description test" />
<meta property="og:image:type"      content="image/jpeg" />
<meta property="og:image"         	content="https://lom13.github.io/assets/img/ExpectingModels-Portfolio-IngridAndIsabel-23-customized-200x380.jpg" />
<meta property="og:image:width"		content="157" />
<meta property="og:image:height" 	content="340" />
</head>
<body>

<!-- Load Facebook SDK for JavaScript -->

<!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="YW7lZz7y"></script> -->

<!-- <div class="fb-share-button" data-href="https://lom13.github.io/fbshare.html" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flom13.github.io%2Ffbshare.html&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

<img class="img-fluid" src="assets/img/ExpectingModels-Portfolio-IngridAndIsabel-23-customized-200x380.jpg" alt="" /> -->


<h1>Sharing</h1>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="OCiQtEA9"></script>

<!-- Your share button code -->
<!-- <div class="fb-share-button" data-href="https://lom13.github.io/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
</div> -->
<button onclick="share()">Share to Workplace</button>
<script>
share = function(){
    url = 'https://facebook.com/sharer.php?display=popup&u=' + window.location.href;
    options = 'toolbar=0,status=0,resizable=1,width=626,height=436';
    window.open(url,'sharer',options);
}
</script>
</body>
</html>
