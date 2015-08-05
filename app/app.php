<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Job_Opening.php";

  $app = new Silex\Application();

  $app->get("/", function() {
    return "<html>
      <head>
        <title>Job Posting Fomr</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
      </head>
      <body>
        <div class='container'>
          <form action='/Job_opening'>
            <div class='form-group'>
              <label for='job_title'>Job Title</label>
              <input type='text' name='job_title' id='job_title'>

            </div>
            <div class='form-group'>
              <label for='description'>Job Description</label>
              <textarea name='description' rows='8' cols='40'>
              Enter a description for your posting.
              </textarea>

            </div>
            <div class='form-group'>
            <label for='name'>Your Name</label>
            <input type='text' name='name' id='name'>
            </div>

            <div class='form-group'>
            <label for='phone'>Your Phone Number</label>
            <input type='number' name='phone' id='phone'>
            </div>

            <div class='form-group'>
            <label for='address'>Your Address</label>
            <input type='text' name='address' id='address'>
            </div>

            <button name='submit' type='submit'>Submit</button>

          </form>

        </div>

      </body>
    </html>";
  });

  $app->get("/Job_opening", function() {
    return "OTHER HTML HERE";
  });
  return $app;
 ?>
