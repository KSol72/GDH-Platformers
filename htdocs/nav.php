<ul class="nav">
  <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "changelog"){echo 'active-nav-item';}?>" href="https://demonlist.gamersdreamhouse.repl.co/">Back to Demonlist</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "leaderboard"){echo 'active-nav-item';}?>" href="leaderboard.php">Leaderboard</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "index"){echo 'active-nav-item';}?>" href="index.php">Main List</a></li>
    <li class="titlebox"><a href="homepage.php" class="titlebox-href">GDH: Platformer List</a></li>
    <li>
    <button onclick="dropMenu()" class="dropbtn">Go To...</button>
        <div id="myDropdown" class="dropdown-content">
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "index"){echo 'active-nav-item';}?>" href="index.php">Main List</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "leaderboard"){echo 'active-nav-item';}?>" href="leaderboard.php">Leaderboard</a>
    <a class="nav-buttons <?php if($_SESSION['active-nav'] == "leaderboard"){echo 'active-nav-item';}?>" href="https://gdhdemonlist.hpsk.me/index.php">Back to Demonlist</a></li>
</div>
    </li>
</ul>
