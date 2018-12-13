<?php
  //start session to keep user logged in
  session_start();

  //create note
  function createNote(){
    if(isset($_POST['create'])){

      if(isset($_SESSION['user'])){
        $userBy = "kyle";
      }
      else{
        $userBy = "Anon";
      }

      $noteURL = uniqid();
      $title = strip_tags($_POST['title']);
      $body = strip_tags($_POST['body']);
      $date = date("d/m/Y");

      if($_POST['title']&&$_POST['body']){
        $con = mysqli_connect("localhost","root","","notely");

        $insertNote = mysqli_query($con, "INSERT INTO notes (noteTitle, noteBody, noteUser, noteDate, noteURL) VALUES ('$title','$body','$userBy','$date','$noteURL')");
        mysqli_close($con);

        echo "<div class='alert alert-success'>Success, you created your first note! View it here:<br /><a href='/view.php?id=$noteURL'>http://notely.com/view.php?id=$noteURL</a></div>";

      }
      else{
        echo "Enter all fields to create a note!";
      }
    }
  }

  //view note page
  function notepage(){
    $noteID = $_GET['id'];

    $con = mysqli_connect("localhost","root","","notely");

    $checkNote = mysqli_query($con, "SELECT * FROM notes WHERE noteURL = '$noteID'");

    $numrows = mysqli_num_rows($checkNote);

    if($numrows==1){
      while($row = mysqli_fetch_assoc($checkNote)){
        $title = $row['noteTitle'];
        $note = $row['noteBody'];
        $user = $row['noteUser'];
        $date = $row['noteDate'];

        ?>
          <h1 class='text-center py-3'><?php echo $title; ?> - <small>by <?php echo $user; ?> on <?php echo $date; ?></small></h1>
          <hr style="border-bottom:1px solid #f8f8f8;" />
          <p>
            <div class="row">
              <div class="col-md-12">
                <div style="color:#444; max-width:100%; min-height:500px;" class="card p-4 my-4">
                  <pre style="white-space: pre-line; ">
                    <?php
                      echo $note;
                    ?>
                  </pre>
                  </di>
                </div>
              </div>
            </div>
          </p>
        <?php

      }
    }
    else{
      echo "<h1 class='text-center display-4' style='margin-top:35vh;'>no rows dun exist, sorry!</h1>";
    }
  }


  //register user for an account

  //log user in

  //delete

  //user settings

  //return all notes

  //return 10 recent notes


?>

