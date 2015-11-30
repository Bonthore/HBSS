<?php
$id=994;
$ep=3;
?>
<html>
<head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(function () {
                $('#currentTime').html($('#video_container').find('video').get(0).load());
                $('#currentTime').html($('#video_container').find('video').get(0).play());
            })
            setInterval(function () {
                $('#currentTime').html($('#video_container').find('video').get(0).currentTime);
                $('#totalTime').html($('#video_container').find('video').get(0).duration);
                var seriesid = "<?php echo $id; ?>";
                var episodenumber = "<?php echo $ep; ?>";
                var get(0).currentTime;
                document.cookie = 'id='+seriesid+'; ep='+episodenumber+'; time='+episodeprogress+';  path=/'
            }, 5000)
        });
    </script>
</head>
<body>
<div id="video_container">
    <video poster="http://media.w3.org/2010/05/sintel/poster.png" preload="none" controls="" id="video" tabindex="0">
        <source type="video/mp4" src="http://media.w3.org/2010/05/sintel/trailer.mp4" id="mp4">
        <source type="video/webm" src="http://media.w3.org/2010/05/sintel/trailer.webm" id="webm">
        <source type="video/ogg" src="http://media.w3.org/2010/05/sintel/trailer.ogv" id="ogv">
        <p>Your user agent does not support the HTML5 Video element.</p>
    </video>
</div>
<div>Current Time : <span id="currentTime">2.381</span></div>
<div>Total time : <span id="totalTime">52.209</span></div>
</body>
</html>