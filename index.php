<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="/">
    <title>Angular WordPress Tests</title>
    <?php wp_head(); ?>
</head>

<body>
<header class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1>
                <a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a>
            </h1>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.row-text-center -->
</header>

<div ng-view></div>

<footer class="cantainer">
    <div class="row text-center">
        <div class="col-sm-12">
            &copy; <?php echo date( 'Y' ); ?>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.row text-center -->
</footer>
</body>

</html>