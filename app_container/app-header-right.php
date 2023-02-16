<div class="app-header-right">
    <!-- <h1>header right</h1> -->
    <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
    </button>

    <button class="add-btn" type="button" title="Add New Project"  data-bs-toggle="modal" data-bs-target="#addbtn">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
        </svg>
    </button>
    <?php include'app-header-add-btn-modal.php'; ?>

    <button class="profile-btn"  type="button" data-bs-toggle="collapse" data-bs-target="#logout" aria-expanded="false" aria-controls="logout">
        <img src="https://static.displate.com/857x1200/displate/2022-07-07/fb201c5aef2a8558a1eec3a095be6d49_1c1023275f02c2ee7bc146309a812775.jpg" />
        <span> ผู้ใช้: <?php echo $_SESSION["username"]; ?> </span>
    </button>

    <button class="profile-btn"></button>
    <div class="collapse" id="logout">  
        <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
    </div>
</div>