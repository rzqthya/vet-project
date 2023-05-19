<?php include "session.php";?>
<ul id="dropdown1" class="dropdown-content" style="width: 100px;">
    <li><a href="#"><i class="ion-android-options" aria-hidden="true"></i> Pengaturan</a></li>
    <li><a href="logout.php"><i class="ion-log-out" area-hidden="true"></i> Keluar</a></li>
</ul>
<nav style="background-color: #96281B;">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Admin Mode</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-drag" style="margin-top: 17px;"></i></a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a class="dropdown-button" href="#" data-activates="dropdown1">
                    <i class="ion-android-people"><i class="ion-chevron-down"></i></i>
                </a>
            </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php"><i class="ion-home"></i>Beranda</a></li>
            <li><a href="#"><i class="ion-android-plane"></i> Pesawat</a></li>
            <li><a href="#"><i class="ion-android-options" aria-hidden="true"></i> Pengaturan</a></li>
            <li><a href="logout.php"><i class="ion-log-out" aria-hidden="true"></i> Keluar</a></li>
        </ul>
    </div>
</nav>
<script>
    $(".button-collapse").sideNav();

</script>
