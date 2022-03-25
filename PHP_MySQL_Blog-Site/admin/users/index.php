<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

<!-- Custom Styling -->
<link rel="stylesheet" href="../../assets/css/style.css">

<!-- Admin Styling -->
<link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Manage Users</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper !-->
    <div class="admin-wrapper">

      <!-- Left Sidebar !-->
      <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

  <!-- Admin Page Wrapper !-->

  <!-- Admin Content !-->
  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add User</a>
      <a href="index.php" class="btn btn-big">Manage Users</a>
    </div>

    <div class="content">
      <h2 class="page-title">Manage Users</h2>
      <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
        <table>
          <thead>
            <th>SN</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <?php foreach ($admin_users as $key => $user): ?>
                <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $user['username']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php if ($user['admin']) { 
                    echo "Admin";
                  } else {
                    echo "User";
                  } ?></td>
                  <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                  <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
  <!-- Admin Content !-->
  </div>
  <!-- Admin Page Wrapper !-->

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>

  </body>
</html>
