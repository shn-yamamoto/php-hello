<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body bgcolor="blue">
 <?php echo '<p>Welcome to OpenShift Container Platform</p>'; ?> 
 <h1>
 <?php echo getenv('INFRA_ENV'); ?>
 </h1>
 <h1>
 <?php echo gethostname(); ?>
 </h1>
 </body>
</html>
