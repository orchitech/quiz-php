<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sample Page</title>
</head>
<body>
<p>This is a sample page with optional image.</p>
<?php if (isset($_GET['showimage'])): ?>
<p><a href="?">Show the version without image</a>.</p>
<img src="logo.png" alt="Logo" />
<?php else: ?>
<p><a href="?showimage">Show the version with image</a>.</p>
<?php endif; ?>
</body>
</html>
