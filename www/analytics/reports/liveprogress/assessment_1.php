<?php

include_once '../../../config.php';

use LearnositySdk\Request\Init;
use LearnositySdk\Utils\Uuid;

$security = array(
    'consumer_key' => $consumer_key,
    'domain'       => $domain
);

$student = array(
    'id'   => htmlspecialchars($_GET['user_id'], ENT_QUOTES),
    'name' => 'Jesse Pinkman'
);

$doRedirect=isset($_GET['do_redirect']);
$neilsFix=isset($_GET['neil_s_fix']);
if ($neilsFix) {
    $doRedirect = false;
}

$request = array(
    'activity_id'    => 'itemsassessdemo',
    'name'           => 'Demo showcasing remote control events',
    'rendering_type' => 'assess',
    'state'          => 'initial',
    'type'           => 'submit_practice',
    'course_id'      => $courseid,
    'session_id'     => Uuid::generate(),
    'user_id'        => $student['id'],
    'items'          => array('Demo4', 'Demo3', 'Demo6', 'Demo7', 'Demo8', 'Demo9'),
    'config'         => array(
        'title'          => 'Demo showcasing remote control events',
        'subtitle'       => $student['name'],
        'administration' => array(
            'pwd' => '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8' // `password`
        ),
        'navigation' => array(
            'intro_item' => 'demo-intro-live-progress',
            'item_count' => array(
               'question_count_option' => true
            )
        ),
        'regions' => array(
            'top-right' => array(
                array(
                    'type' => 'timer_element'
                ),
                array(
                    'type' => 'pause_button'
                )
            ),
            'right' => array(
               array(
                  'type' => 'previous_button'
               ),
               array(
                  'type' => 'next_button'
               ),
               array(
                  'type' => 'separator_element'
               ),
               array(
                  'type' => 'flagitem_button'
               ),
               array(
                  'type' => 'masking_button'
               )
            )
        ),
        'time' => array(
            'max_time'     => 1500,
            'limit_type'   => 'soft',
            'warning_time' => 120,
            'show_pause'   => true,
            'show_time'    => true
        ),
        'questionsApiVersion' => 'v2',
        'assessApiVersion'    => $version_assessapi,
        'configuration'       => array(
            'ondiscard_redirect_url' => './assessment_1.php?user_id=' . htmlspecialchars($_GET['user_id'], ENT_QUOTES),
            'onsubmit_redirect_url' => './assessment_1.php?user_id=' . htmlspecialchars($_GET['user_id'], ENT_QUOTES),
            'onsave_redirect_url'   => './assessment_1.php?user_id=' . htmlspecialchars($_GET['user_id'], ENT_QUOTES),
            'events'                => true
        )
    )
);

$Init = new Init('items', $security, $consumer_secret, $request);
$signedRequest = $Init->generate();

?>
<!doctype html>
<html>
<head>
</head>
<body>
    <!-- Container for the items api to load into -->
    <div id="learnosity_assess"></div>
    <button id="submitLrn">Hooked submit</button>
    <script src="<?php echo $url_items; ?>"></script>
    <script>
        var itemsApp = LearnosityItems.init(<?php echo $signedRequest; ?>
);
    </script>
    <script>
        numOfQuestions = 6;
        function winCrsOnSubmit() {
            console.log("submit clicked");
            var lockedBrowserStarted = false;
            var settings =
            {
                success: function (response_ids) {
                    console.log("Test saved successfully.", response_ids);
                    /* lockedBrowserStarted = getCookie('LockedBrowserStarted').toLowerCase(); */
                    /* setStatusCookies(false, false, false); */
                    /* if (lockedBrowserStarted == 'true') { */
                    /*     document.cookie = "ReturnUrl=" + getCookie('LockedBrowserEndLink'); */
                    /* } */
                    <?php if ($doRedirect) { ?>
                    window.location.replace('/Home/Completed');
                    <?php } ?>
                },
                error: function (e) {
                    console.log("Unable to save test, please try again.", e);
                }
            };
           itemsApp.attemptedQuestions(function (responses) {
                var proceed = true;
                var skipped = numOfQuestions - responses.length;
                if (skipped > 0) {
                    proceed = confirm("You have not answered " + skipped + " of " + numOfQuestions +
                        " questions. Once submitted, you will not be able to re-open the assessment. Are you sure you want to submit the assessment?");
                }
                else {
                    proceed = confirm("Once submitted, you will not be able to re-open the assessment. Are you sure you want to submit the assessment?");
                }
                if (proceed) {
                    <?php
                    if ($neilsFix) {
                    ?>
                        /* , { */
                        /*     readyListener: function() { */
                                itemsApp.eventsApp().on(function(events) {
                                    console.log("potential submit event received");
                                    for (val of events) {
                                        if(val.verb.id === 'http://activitystrea.ms/schema/1.0/submit') {
                                            console.log("submitted!");
                                            window.location.replace("https://www.google.com");
                                        }
                                    };
                                });
                                console.log("submit hooked");
                            /* } */
                        /* } */
                    <?php
                    } ?>
                    itemsApp.submit(settings);
                }
            });
        }

        window.onload = function() {
            document.getElementById("submitLrn").onclick=winCrsOnSubmit;
        };

    </script>
</body>
</html>
