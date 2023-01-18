<?php 


require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';

$item = '';

if (!empty($_POST)){
   
   if (!Token::check(Input::get('csrf'))) {
      include($abs_us_root . $us_url_root . 'usersc/scripts/token_error.php'); 
   }

   if (isset($_POST['saveItem'])){
      $fields = [];
      $fields['name'] = $_POST['name'];
      dnd($db->insert('items', $fields, false));

   }
    
}


?>
 <div class="col-12">
      <form class="" action="" method="post">
         <input type="hidden" name="csrf" value="<?= Token::generate(); ?> ">
         <div class="row mb-0 mx-3">
            <div class="col-12 col-sm-4 mt-4 mb-0">
               <div class="form-group">
                  <label for="name" class="form-label">Item</label>
                  <input class="form-control" type="text" name="name">
               </div>
            </div>
<!-- 
            <div class="col-12 col-sm-4 mt-4 mb-0">
               <div class="form-group">
                  <label for="item" class="form-label">Item Category</label>
                  <input class="form-control" type="text" name="category">
               </div>
            </div>
                -->
   
            

            <!-- <div class="col-12 col-sm-4 mt-4" id="metricBox">
               <div class="form-group">
                  <label class="form-label" for="socket_id">Size</label>
                  <select class="form-control" name="socket_id">
                     <option value="" selected="selected" disabled>--Select Size--</option>
                     <?php foreach ($metric as $m) { ?>
                        <option value="<?= $m->id ?>"><?= floatval($m->socket); ?> mm</option>
                     <?php } ?>
                  </select>
               </div>
            </div> -->

            <!-- <div class="col-12 col-sm-4 mt-4" id="standardBox" style="display: none;">
               <div class="form-group">
                  <label class="form-label" for="socket_id_standard">Size</label>
                  <select class="form-control" name="socket_id_standard">
                     <option value="" selected="selected" disabled>--Select Size--</option>
                     <?php foreach ($standard as $m) { ?>
                        <option value="<?= $m->id ?>"><?= QuantityTransform::decimalToFraction($m->socket, ' '); ?>" </option>
                     <?php } ?>
                  </select>
               </div>
            </div> -->


            <!-- <div class="col-12 col-sm-4 mt-4">
               <div class="form-group">
                  <label class="form-label" for="points">Points</label>
                  <select class="form-control" name="points" required>
                     <option value="6" selected="selected">6 Point</option>
                     <option value="12">12 Point</option>
                  </select>
               </div>
            </div> -->

            <!-- <div class="col-12 col-sm-4 mt-4">
               <div class="form-group">
                  <label class="form-label" for="drive">Ratchet Size</label>
                  <select class="form-control" name="drive" required>
                     <option value="1/4">1/4" Drive</option>
                     <option value="3/8" selected="selected">3/8" Drive</option>
                     <option value="1/2">1/2" Drive</option>
                     <option value="3/4">3/4" Drive</option>
                     <option value="1">1" Drive</option>
                  </select>
               </div>
            </div> -->

            <!-- <div class="col-12 col-sm-4 mt-4">
               <div class="form-group">
                  <label class="form-label" for="depth">Depth</label>
                  <select class="form-control" name="depth" required> -->
                     <!-- <option value="shallow">Shallow</option> **This value isn't in the DB. Placing "medium" below for now -->
                     <!-- <option value="medium">Medium</option>
                     <option value="standard" selected="selected">Standard</option>
                     <option value="deep">Deep</option>
                  </select>
               </div>
            </div> -->
<!-- 
            <div class="col-12 col-sm-4 mt-4">
               <div class="form-group">
                  <label class="form-label" for="impact">Impact?</label>
                  <select class="form-control" name="impact" required>
                     <option value="0">No</option>
                     <option value="1">Yes</option>
                  </select>
               </div>
            </div>
            <div class="col-12 col-sm-4 mt-4">
               <div class="form-group">
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Item Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
               </div>
               </div>
            </div> -->


            <div class="col-12 col-sm-4 mt-4 m">
               <div class="form-group mt-5">
                  <input type="submit" name="saveItem" value="Save" class="btn btn-primary">
               </div>
            </div>

            
         </div>

      </form>

   </div>