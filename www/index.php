<?php
include_once 'config.php';
include_once 'includes/header.php';
?>

<div class="landing">
    <div class="jumbotron">
        <h1 class="landing-heading">Learnosity API Demos</h1>
        <dl class="dl-horizontal">
            <dt><span class="glyphicon glyphicon-question-sign"></span></dt>
            <dd><p>This site contains demonstrations for all Learnosity APIs. Most of them are interactive, allowing you to get
            the feel of our products with real content.</p></dd>
        </dl>
        <dl class="dl-horizontal">
            <dt><span class="glyphicon glyphicon-cloud-download"></span></dt>
            <dd><p>You may also download the entire site to see how you can easily integrate our services into your own technology stack,
        or you can <a href="https://github.com/Learnosity/learnosity-php-examples/tree/master">browse the code directly</a> on github.</p></dd>
        </dl>
        <dl class="dl-horizontal">
            <dt><span class="glyphicon glyphicon-info-sign"></span></dt>
            <dd><p>Although the site has been written in PHP, the format is simple enough to follow no matter what your preferred language might be.</p></dd>
        </dl>
    </div>

    <div class="row landing-panel">
        <div class="col-md-3">
            <h3 class="pull-right">Authoring</h3>
        </div>
        <div class="col-md-8 content-panel">
            <ul class="list-unstyled">
                <li><h4><a href="<?php echo $env['www'] ?>authoring/questioneditor/index.php">Question Editor API</a></h4>
                <p>A fully featured Question and Feature creation tool, with an easy-to-use interface and a live preview and interaction panel,
                allowing on-the-fly interactive creation and testing for Authors.</p></li>
                <li><h4><a href="<?php echo $env['www'] ?>authoring/author/index.php">Author API</a></h4>
                <p>Allows searching and integration of Learnosity powered content into your content management systems, while still leveraging the
                power of the Learnosity Author site for creation of rich items with a simple interface.</p></li>
            </ul>
        </div>
    </div>
    <div class="row landing-panel">
        <div class="col-md-3">
            <h3 class="pull-right">Assessment</h3>
        </div>
        <div class="col-md-8 content-panel">
            <ul class="list-unstyled">
                <li><h4><a href="<?php echo $env['www'] ?>assessment/questions/index.php">Questions API</a></h4>
                <p>Rich Question and Feature types can be embedded on any page with the Learnosity Questions API.</p></li>
                <li><h4><a href="<?php echo $env['www'] ?>assessment/items/index.php">Items API</a></h4>
                <p>Provides a simple way to access content from the Learnosity item bank. Also includes a powerful
                adaptive engine for fine grained assessment control.</p></li>
                <li><h4><a href="<?php echo $env['www'] ?>assessment/assess/index.php">Assess API</a></h4>
                <p>Configurable layouts and assessment controls including pause, fullscreen mode,
                navigation and many more. Provides simple assessment delivery to desktops and tablet devices.</p></li>
            </ul>
        </div>
    </div>
    <div class="row landing-panel">
        <div class="col-md-3">
            <h3 class="pull-right">Reporting</h3>
        </div>
        <div class="col-md-8 content-panel">
                <ul class="list-unstyled">
                    <li><h4><a href="<?php echo $env['www'] ?>reporting/reports/index.php">Reports API</a></h4>
                    <p>Allows rendering of rich reports on any page. Includes a live progress report with control
                    events, to remotely control any assessment in real time.</p></li>
                    <li><h4><a href="<?php echo $env['www'] ?>reporting/data/index.php">Data API</a></h4>
                    <p>A back office service that allows authenticated users to retrieve and store information from within the Learnosity Assessment platform.</p></li>
                    <li><h4><a href="<?php echo $env['www'] ?>reporting/sso/index.php">Single Sign On API</a></h4>
                    <p>Gain quick access to assessments and reports using the Learnosity Dashboards.</p></li>
                </ul>
        </div>
    </div>
</div>




<!--
<div class="container">
    <div class="row landing">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Authoring</h2>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><p><a href="<?php echo $env['www'] ?>authoring/questioneditor/index.php">Question Editor API</a></p>
                        <p>A fully featured Question and Feature creation tool, with an easy-to-use interface and a live preview and interaction panel,
                        allowing on-the-fly interactive creation and testing for Authors.</p></li>
                        <li><p><a href="<?php echo $env['www'] ?>authoring/author/index.php">Author API</a></p>
                        <p>Allows searching and integration of Learnosity powered content into your content management systems while still leveraging the
                        power of the learnosity author site for creation of rich items with a simple interface.</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Assessment</h2>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><p><a href="<?php echo $env['www'] ?>assessment/questions/index.php">Questions API</a></p>
                        <p>Rich Question types can be embedded on any page with the Learnosity Questions API.</p></li>
                        <li><p><a href="<?php echo $env['www'] ?>assessment/items/index.php">Items API</a></p>
                        <p>Provides a simple way to access content from the Learnosity item bank.</p></li>
                        <li><p><a href="<?php echo $env['www'] ?>assessment/assess/index.php">Assess API</a></p>
                        <p>Configurable layouts, pause, fullscreen mode, simple assessment delivery to desktops and tablet devices.</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Reporting</h2>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><p><a href="<?php echo $env['www'] ?>reporting/reports/index.php">Reports API</a></p>
                        <p>A service that allows content providers to easily render rich reports.</p></li>
                        <li><p><a href="<?php echo $env['www'] ?>reporting/data/index.php">Data API</a></p>
                        <p>A back office service that allows authenticated users to retrieve and store information from within the Learnosity Assessment platform.</p></li>
                        <li><p><a href="<?php echo $env['www'] ?>reporting/sso/index.php">Single Sign On API</a></p>
                        <p>Get quick access to the data using the Learnosity Dashboards.</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php include_once 'includes/footer.php';
