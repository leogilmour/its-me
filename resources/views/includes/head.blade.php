<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Leo Gilmour is a London based web developer, tutor and event planner">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>
<?php 
if ($_SERVER['REQUEST_URI'] == "/halloween") {
    echo "Halloween 2017";
} else {
    ?>{{ config('app.name', 'Leo Gilmour') }} <?php
}
?>
</title>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<meta property="og:title" content="Leo Gilmour" />
<meta property="og:description" content="Leo Gilmour is a London based web developer, tutor, and occasional event planner." />
<meta property="og:image" content="http://leogilmour.com/images/me-in-russia.jpg" />

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>