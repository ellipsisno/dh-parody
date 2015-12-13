<span style='font-family: monospace; font-size: 13px;'>
<?php
// parody of Diffie-Hellman
for ($lines=1; $lines<=86; $lines++) {
   for ($dhm=1; $dhm<=150; $dhm++) {
      $dhparam = rand(1, 50);
      if ($dhparam == "1") {
         $dhparam = "+";
      } else {
         $dhparam = ".";
      }
      if ($lines != "86") {
         if ($dhm <= "150") {
            print $dhparam;
         }
      }
      if ($lines == "86") {
         if ($dhm < "145") {
            print $dhparam;
         } else {
            print "++*++*";
            break;
         }
      }
   }
   print "<br />";
}
?>
</span>
