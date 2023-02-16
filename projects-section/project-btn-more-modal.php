 <!-- Modal -->
 <div class="modal fade" id="exampleModal<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียด <?php echo $f['ItemName']; ?></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <img src="<?php echo $f['imageFileName']; ?>" onerror="this.onerror=null; this.src='Logo.png'" class="card-img-top" width="200" height="230">
                 <p>

                 <h5 class="card-title"><?php echo $f['ItemName']; ?></h5>
                 <h5 class="card-title">Color : <?php echo $f['itemColor']; ?></h5>
                 <h5 class="card-title">Revision: <?php echo $f['itemRevision']; ?></h5>
                 <h5 class="card-title">MPN : <?php echo $f['itemMPN']; ?></h5>
                 <h5 class="card-title">Cosmetic: <?php echo $f['cosA']; ?></h5>

                 </p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                 <?php if ($_SESSION['status'] == 'ADMIN') { ?>
                     <a href='./additem/additem-editform.php?ItemID=<?php echo $f['ItemID']; ?> ' class="btn btn-warning">แก้ไข</a>
                 <?php } ?>
                 <a href='./additem/additemcheck-editform.php?ItemID=<?php echo $f['ItemID']; ?> ' class="btn btn-primary">เพิ่มข้อมูลการตรวจสอบชิ้นงาน</a>
             </div>
         </div>
     </div>
 </div>