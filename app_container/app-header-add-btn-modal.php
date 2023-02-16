 <!-- Modal -->
 <div class="modal fade" id="addbtn" tabindex="-1" aria-labelledby="addbtn" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูล</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form method="post" action="./additem/additem-add.php">
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">
                             Item Name:
                         </span>
                         <input class="form-control" type="text" name="ItemName" value="" />
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">Color:</span>
                         <input class="form-control" type="text" name="itemColor" value="" />
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">Revision:</span>
                         <input class="form-control" type="text" name="itemRevision" value="" />
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">MPN: </span>
                         <input class="form-control" type="text" name="itemMPN" value="" />
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                         <input class="form-control" type="text" name="imageFileName" value="" />
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">Cosmetic/Appearance</span>
                         <input class="form-control" type="text" name="cosA" value="" />
                     </div>



             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <input type="submit" class='btn btn-primary' value="บันทึกข้อมูล">
                 </form>
             </div>
         </div>
     </div>
 </div>