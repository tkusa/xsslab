<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-eval'");

$contents = isset($_POST['contents']) ? $_POST['contents'] : "";

?>

<html>
    <head>
    </head>
    <body>
        <div>
            <h1>CSP unsafe-eval</h1>
            <form method="post">
              <textarea id="form" name="contents"><?php echo $contents ?></textarea>
              <input type="submit" />
            </form>
        </div>
        <div>
          <h2>eval</h2>
          <p id="result"></p>
        </div>
        <div>
          <h2>inline</h2>
          <p><?php echo $contents ?></p>
        </div>
        <a href="/csp">Back</a>
        <script type="text/javascript" src="/csp/eval.js"></script>
    </body>
</html>
