<!DOCTYPE html>
<html ng-app="">
<head>
    <base href="/angwp/">
    <title>Angular WordPress Tests</title>
    <?php wp_head(); ?>
</head>

<body>
<header>
    <h1>
        <a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a>
    </h1>
</header>

<div ng-view></div>

<footer>
    &copy; <?php echo date( 'Y' ); ?>
</footer>
</body>

</html>