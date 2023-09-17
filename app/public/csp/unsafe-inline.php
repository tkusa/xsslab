<?php
header("Content-Security-Policy: script-src 'unsafe-inline'");

$contents = isset($_POST['contents']) ? $_POST['contents'] : "";

?>

<html>
    <head>
    </head>
    <body>
        <div>
            <h1>CSP unsafe-inline</h1>
            <form method="post">
              <textarea id="form" name="contents"><?php echo $contents ?></textarea>
              <input type="submit" />
            </form>
        </div>
        <div>
          <p id="result"><?php echo $contents ?></p>
        </div>
        <a href="/csp">Back</a>
    </body>
</html>
