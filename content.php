<div class="pages">
   <h2>Data</h2>
     <?php
       echo '<p>';
       echo date('H:i:s d.m.Y');
     ?>
   <div class="content">
     <h2>Content</h2>
     <?php
       echo '<p>Ip: ';
       echo getenv('REMOTE_ADDR');
       $files_arr = scandir('14');
       echo '<pre>';
       print_r($files_arr);
       echo '</pre>';
     ?>
   </div>
   <div class="sidebar">
   <ul>
      <li><a href="log.php">Log</a></li>
      <li><a href="sel.php">Sel</a></li>
      <li><a href="download.php">Download</a></li>
   </ul>
   </div>
</div>
