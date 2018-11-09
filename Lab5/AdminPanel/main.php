
<?php 
    session_start();
    if(!isset($_SESSION['isLogged'])){
        header('Location: index.php');
        exit();
    }
?>

<?php include("sendComment.php"); 

    if (isset($_GET['edit'])) {
      $id=$_GET['edit'];

      $rec = mysqli_query($connection, "SELECT * FROM comments WHERE comm_id = $id");
      $record = mysqli_fetch_array($rec);

      $id = $record['comm_id'];
      $edit_state = true;
      $nick = $record['comm_nick'];
      $email = $record['comm_email'];
      $article = $record['comm_art_id'];
      $date = $record['comm_date'];
      $text = $record['comm_text'];
    }

    if (isset($_GET['clean'])) {
      $edit_state = false;
      $id = 0;
      $nick = "";
      $email = "";
      $article = "";
      $date = "";
      $text = "";
    }
    
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Ulkit -->
 <link rel="stylesheet" href="css/uikit.min.css" />
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} </script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="./style.css" rel="stylesheet">
</head>
<body>
<div>
    <img src="<?php echo $_SESSION['avatarURL']; ?>" alt="Avatar" class="avatar"> 
    <?php echo("   Hello ".$_SESSION['nick']."! <br/>"); ?>
    </div>
    <nav>
    <div>
<ul class="nav nav-tabs">
  <li class="nav-item">
  <a class="nav-item nav-link active" id="nav-comments-tab" data-toggle="tab" href="#nav-comments" role="tab" aria-controls="nav-comments" aria-selected="false">Comments</a>
 </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
        role="button" aria-haspopup="true" aria-expanded="false">Users</a>
    <div class="dropdown-menu">
    <a class="nav-item nav-link" id="nav-youraccount-tab" data-toggle="tab" href="#nav-youraccount" role="tab" aria-controls="nav-youraccount" aria-selected="false">Your Account</a>
    <a class="nav-item nav-link" id="nav-allusers-tab" data-toggle="tab" href="#nav-allusers" role="tab" aria-controls="nav-allusers" aria-selected="false">All Users</a>
      <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a> -->
    </div>
  </li>
  <li class="nav-item">
  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Logs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./log_out.php">Log Out</a>
  </li>
  </ul>
  </div>
  </nav>

<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-comments" role="tabpanel" aria-labelledby="nav-comments-tab">
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nick</th>
        <th scope="col">Email</th>
        <th scope="col">Text</th>
        <th scope="col">Article</th>
        <th scope="col">Date</th>
        <th scope="col" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
        <th scope="row"> <?php echo $row['comm_id'] ?></th>
        <td><?php echo $row['comm_nick'] ?></td>
        <td><?php echo $row['comm_email'] ?></td>
        <td><?php echo $row['comm_text'] ?></td>
        <td><?php echo $row['comm_art_id'] ?></td>
        <td><?php echo $row['comm_date'] ?></td>
        <td><a href="main.php?edit=<?php echo $row['comm_id']; ?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
        <td><a href="sendComment.php?del=<?php echo $row['comm_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
  
        <form method="post" action="sendComment.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nick:</label>
          <input type="text" name="nick" value="<?php echo $nick; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Nickname">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email:</label>
          <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Article:</label>
          <input type="text" name="article" value="<?php echo $article; ?>" class="form-control" id="exampleFormControlInput1" placeholder="0">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Date:</label>
          <input type="text" name="date" value="<?php echo $date; ?>" class="form-control" id="exampleFormControlInput1" placeholder="0000-00-00">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Text:</label>
          <textarea class="form-control" type="text" name="text" id="exampleFormControlTextarea1" rows="3"><?php echo $text; ?></textarea>
        </div>
        <?php if ($edit_state == false){ ?>
          <center><button type="submit" name="submit" class="btn btn-success">Send</button></center>
        <?php } else{ ?>
        <center><button type="submit" name="update" class="btn btn-warning">Update</button>
        <button type="submit" name="clean" class="btn btn-primary">Clean</button></center>
        <?php } ?>
  
        </form>
  <br/><br/><br/>
  
    </div>

  <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <br>
  <button id="log-btn" type="button" class="btn btn-primary" value=0>Show Logs</button>
  <br><br>
  
<div class="response">

</div>

  </div>
  <div class="tab-pane fade" id="nav-youraccount" role="tabpanel" aria-labelledby="nav-youraccount-tab">
  
<br/><br/>
  <div class="card" style="width:25%">
  <img src="<?php echo $_SESSION['avatarURL']; ?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo $_SESSION['nick']; ?></b></h4>
  </div>
</div>        
<div>

<table class="uk-table uk-table-striped uk-table-small">
    <tbody>
        <tr>
            <td><span uk-icon="hashtag"></span></td><td><?php echo $_SESSION['id']."<br/>"; ?></td>           
        </tr>
        <tr>
            <td><span uk-icon="user"></span></td><td><?php echo $_SESSION['nick']."<br/>"; ?></td>
        </tr>
        <tr>
            <td><span uk-icon="mail"></span></td><td><?php echo $_SESSION['email']."<br/>"; ?></td>
        </tr>
        <tr>
            <td><span uk-icon="cog"></span></td><td><?php echo $_SESSION['type']."<br/>"; ?></td>
        </tr>
        <tr>
            <td><span uk-icon="calendar"></span></td><td><?php echo $_SESSION['register']."<br/>"; ?></td>
        </tr>
        <tr>
            <td><span uk-icon="link"></span></td><td><?php echo $_SESSION['avatarURL']."<br/>"; ?></td>
        </tr>
    </tbody>
</table>


<div class="uk-button-group">
    <button class="uk-button uk-button-default">Options</button>
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="list"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-active" style="text-align:center"><a href="#">Info</a></li>
                <li class="uk-nav-header">Change...</li>
                <li style="text-align:right"><a href="#">...nickname</a></li>
                <li><a href="#" style="text-align:right">...password</a></li>
                <li><a href="#" style="text-align:right">...email</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#" style="text-align:center">Send photo link</a></li>
            </ul>
        </div>
    </div>
</div>

   </div>
  
  </div>
  <div class="tab-pane fade" id="nav-allusers" role="tabpanel" aria-labelledby="nav-allusers-tab">
  <br/>
  <button id="SH_btn" type="button" class="btn btn-secondary">Show Users</button>
  
  </div>

  

</div>

<script>

$('#myTab a').on('click', function (e) {
e.preventDefault()
$(this).tab('show')
})
</script>

<script>
var Btn_log = document.getElementById('log-btn');
Btn_log.addEventListener('click', getJson);



function getJson() {
  if(Btn_log.value == 0)
  {
    Btn_log.value = 1;
    Btn_log.innerText = "Hide logs";

    const xhr = new XMLHttpRequest();

    xhr.onload = function() {
        if(this.status === 200) {

          const res = JSON.parse(this.responseText);
            console.log(res);
          let response = '';

          res.forEach(log => response += 
          `<b>Id:</b>  ${log.id}<br> 
          <b>Date:</b>  ${log.date}<br>
          <b>Nick:</b>  ${log.nick}
          <b>E-Mail:</b>  ${log.email}<br>
          <b>Action:</b>  ${log.action}<br><br>`
                                          );
        document.querySelector('.response').innerHTML = response;
        }
    }
    xhr.open('GET', 'MOCK_DATA.json', true);
    xhr.send();

    $(document).ready(function(){
        $(".response").show();
    });
}
else
{
    Btn_log.value = 0;
    Btn_log.innerText = "Show logs";

  $(document).ready(function(){
        $(".response").hide();
    });
}
}
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
