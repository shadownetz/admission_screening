$(document).ready(function () {
     // Load content of dashboard automatically when page loads
    $('.ex-content').load("includes/frames/dash-content.php");
    // $('.ex-content').load("includes/frames/set-status.php");

    // Load content of dashboard
    $('.dash').click(function () {
        $('.ex-content').load("includes/frames/dash-content.php");
    });
     // Load content of set test page
     $('.set-test').click(function () {
        $('.ex-content').load("includes/frames/set-test.php");
     });
    // Load content of set Practical page
    $('.set-reprint').click(function () {
        $('.ex-content').load("includes/frames/set-reprint.php");
    });
    // Load content of admission status page
    $('.set-check-status').click(function () {
        $('.ex-content').load("includes/frames/set-status.php");
    });
    // Load content of account page
    $('.shw-acc').click(function () {
        $('.ex-content').load("includes/frames/profile.php");
    });
})