<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Part 2 Results</title>
        <link rel="stylesheet" type="text/css" href="pr1.css"/>
    </head>
<body>
  <?php date_default_timezone_set('America/New_York');?>
  <div class="header">
    <label>Midway Coupon Distributor </label>
  </div>
  <div class="body">
    <?php
          $coupons = $_POST['coupons'];

          define("CANDYBAR",10);
          define("GUMBALL",3);


          function coupon_candybar(&$coupons){
            return $coupons/CANDYBAR;
          }

          function coupon_gumball($coupons,$return){
            $re = $coupons - ($return*CANDYBAR);
            return $re/GUMBALL;

          }


          function coupon_gumballs($coupons){

              $re = $coupons/CANDYBAR;
              $result = (int)$re*10;
              $w=  (int)$result;
              $r = $coupons - (int)$w;
              return (int)$r % GUMBALL;

          }



          $runcalc  = coupon_candybar($coupons);

          $gum  = coupon_gumball($coupons,(int)$runcalc);

          $gums  = coupon_gumballs($coupons);




    ?>
Your <?php echo $coupons; ?> coupons can be redeemed for: <br />
<p>
<?php echo (int)$runcalc; ?> Candy Bars<br />
<?php
if ((int)$runcalc>0){
for($w=0;$w<(int)$runcalc;$w++){
                  echo 'o ';
              }}?>

<br /><br />
<?php echo (int)$gum; ?>   Gumballs<br />
<?php
if ((int)$gum>0){
for($w=0;$w<(int)$gum;$w++){
                  echo 'o ';
              }}?>


<br /><br />
<?php echo $gums; ?>  Left over coupons<br />
<?php
if ((int)$gums>0){
for($w=0;$w<(int)$gums;$w++){
                  echo 'o ';
              }}?>
</p>
  </div>
      <div class='footer'>
          <label>Legend: Candy Bar = 10 coupons | Gumball = 3 coupons</label>
      </div>
  </form>
  <div class="f">
  <?php echo "Last Modified: " . date("H:i M j, Y T | ", getlastmod()) . "<a href=\"part2.html\"> Return to form page</a>" ;?>
  </div>

</body>
</html>
