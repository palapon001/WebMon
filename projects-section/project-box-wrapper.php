<?php
$sql1 = " SELECT * FROM item ORDER BY itemid ASC ";
$q = mysqli_query($con, $sql1);
$no = 1;
while ($f = mysqli_fetch_assoc($q)) {
?>
    <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #fee4cb">
            <div class="project-box-header">
                <span>No.<?php echo $no; ?></span>
                <div class="more-wrapper">

                    <button type="button" class="project-btn-more" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $no ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="12" cy="5" r="1" />
                            <circle cx="12" cy="19" r="1" />
                        </svg>
                    </button>

                    <?php include 'project-btn-more-modal.php'; ?>

                </div>
            </div>
            <div class="box-progress-wrapper">
                <table>
                    <tr>
                        <th>
                            <div class="box-progress-wrapper">
                                <p class="box-content-header"><?php echo $f['ItemName']; ?></p>
                                <p class="box-content-subheader">Color : <?php echo $f['itemColor']; ?></p>
                                <p class="box-content-subheader">Revision: <?php echo $f['itemRevision']; ?></p>
                                <p class="box-content-subheader">MPN : <?php echo $f['itemMPN']; ?></p>
                                <p class="box-content-subheader">Cosmetic: <?php echo $f['cosA']; ?></p>
                            </div>
                        </th>
                        <th>
                            <div class="project-box-content-header">
                                <img src="<?php echo $f['imageFileName']; ?>" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/6062/6062646.png'" alt="" width="100" height="100" style="border-radius:  10%;">
                            </div>
                        </th>
                    </tr>
                </table>
            </div>





            <div class="project-box-footer">
                <div class="days-left" style="color: #ff942e">
                    สถานะ : กำลังตรวจสอบ
                </div>
            </div>

        </div>
    </div>
<?php
    $no++;
}
?>