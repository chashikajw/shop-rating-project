<div class="item span9">
  <div class="item span9">
    <ul class="thumbnails">

<?php
$i = 0;
foreach ($categary_data as $item){ ?>
        <a  href="">
         <li class="span2">
           <div class="thumbnail">
               <?php echo "<img src='" . base_url() . "assets/business/" . $item->logo_path . "' alt=''/>" ?>
               <div class="caption">
                 <h5><?php echo $item->name; ?></h5>
                 <p><?php echo $item->description; ?></p>
                 <center>
                  <button class="btn btn-flat">View</button><br>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <!-- <h4><a class="btn" href="">VIEW</a> -->
                 </center>
                     <!-- <span class="pull-right">$222.00</span></h4> -->
               </div>
           </div>
         </li>
        </a>
<?php
$i += 1;
if ($i % 4 == 0){ ?>

</ul>
</div>
<div class="item span9">
    <ul class="thumbnails">


<?php }
} ?>

</ul>
</div>

    </div>
</div>