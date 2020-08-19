<?

include "connect_mysql.php";

/*
$sql1 = " CREATE TABLE IF NOT EXISTS `rpsdb`.`creditpointdata` ( ";
$sql1 .= " `custid` INT(11) NULL , ";
$sql1 .= " `custcode` VARCHAR( 25 )  NULL , ";
$sql1 .= " `custname` varchar(255) NULL , ";
$sql1 .= " `arreceid` int(11) NULL , ";
$sql1 .= " `docuno` varchar(25) NULL , ";
$sql1 .= " `docudate` datetime  NULL , ";
$sql1 .= " `recehd_receamnt` double  NULL , ";
$sql1 .= " `receby` varchar(255)  NULL , ";
$sql1 .= " `soinvid` int(11)  NULL , ";
$sql1 .= " `soinvno` varchar(25)  NULL , ";
$sql1 .= " `soinvdate` datetime  NULL  ,  ";
$sql1 .= " `netamnt` double NULL  ,  ";
$sql1 .= " `stype` varchar(255)  NULL  ,  ";
$sql1 .= " `snetamnt` double  NULL  ,  ";
$sql1 .= " `billid` int(11)  NULL  ,  ";
$sql1 .= " `billno` varchar(50)  NULL  ,  ";
$sql1 .= " `billdate` datetime  NULL  ,  ";
$sql1 .= " `cheqno` varchar(50)  NULL  ,  ";
$sql1 .= " `recedate` datetime  NULL  ,  ";
$sql1 .= " `cheqreceamnt` double  NULL  ,  ";
$sql1 .= " `cashamnt` double  NULL  ,  ";
$sql1 .= " `transbookamnt` double  NULL  ,  ";
$sql1 .= " `cardamnt` double  NULL  ,  ";
$sql1 .= " `recedt_receamnt` double  NULL  ,  ";
$sql1 .= " `srecedtamnt` double  NULL  ,  ";
$sql1 .= " `datecalpoint` datetime  NULL  ,  ";
$sql1 .= " `numday` double  NULL  ,  ";
$sql1 .= " `creditpoint` double  NULL    ";
$sql1 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

$create_tb1 = mysql_query($sql1) or die(mysql_error()); 
*/


$sql2 = " CREATE TABLE IF NOT EXISTS `rpsdb`.`totalpoint` ( ";
$sql2 .= " `custid` INT NOT NULL PRIMARY KEY , ";
$sql2 .= " `custcode` VARCHAR( 50 )  NULL , ";
$sql2 .= " `custname` VARCHAR( 150 )  NULL , ";
$sql2 .= " `custaddr1` VARCHAR( 150 )  NULL , ";
$sql2 .= " `contdistrict` VARCHAR( 100 )  NULL , ";
$sql2 .= " `contamphur` VARCHAR( 100 )  NULL , ";
$sql2 .= " `contprovince` VARCHAR( 100 )  NULL , ";  //แผนก
$sql2 .= " `contpostcode` VARCHAR( 100 )  NULL , ";
$sql2 .= " `saold` double( 10,2 ) NULL , ";
$sql2 .= " `sanew` double( 10,2 ) NULL , ";
$sql2 .= " `pointdt` double( 10,2 )  NULL,  ";
$sql2 .= " `p1` double( 10,2 )  NULL  ";
$sql2 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb2 = mysql_query($sql2) or die(mysql_error());
 
 
$sql3 = " CREATE TABLE IF NOT EXISTS `rpsdb`.`totalpoint60` ( ";
$sql3 .= " `custid` INT NOT NULL PRIMARY KEY , ";
$sql3 .= " `custcode` VARCHAR( 50 )  NULL , ";
$sql3 .= " `custname` VARCHAR( 150 )  NULL , ";
$sql3 .= " `custaddr1` VARCHAR( 150 )  NULL , ";
$sql3 .= " `contdistrict` VARCHAR( 100 )  NULL , ";
$sql3 .= " `contamphur` VARCHAR( 100 )  NULL , ";
$sql3 .= " `contprovince` VARCHAR( 100 )  NULL , ";  //แผนก
$sql3 .= " `contpostcode` VARCHAR( 100 )  NULL , ";
$sql3 .= " `saold` double( 10,2 ) NULL , ";
$sql3 .= " `sanew` double( 10,2 ) NULL , ";
$sql3 .= " `pointdt` double( 10,2 )  NULL ,  ";
$sql3 .= " `p1` double( 10,2 )  NULL , ";
$sql3 .= " `pyear` INT  NULL  ";
$sql3 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb3 = mysql_query($sql3) or die(mysql_error());

/*
$sql3 = " CREATE TABLE IF NOT EXISTS `numchai_db`.`prdt_tb` ( ";
$sql3 .= " `prdt_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
$sql3 .= " `pr_docid` VARCHAR( 20 )  NOT NULL , ";
$sql3 .= " `prdt_numrow` INT NOT  NULL , ";
$sql3 .= " `prdt_procode` VARCHAR( 150 ) NULL , ";
$sql3 .= " `prdt_proname` VARCHAR( 255 ) NULL , ";
$sql3 .= " `prdt_proprice` DOUBLE( 10,2 ) NULL , ";
$sql3 .= " `prdt_pronum_stock` INT NULL , ";
$sql3 .= " `prdt_pronum_sell` INT NULL , ";
$sql3 .= " `prdt_pronum_pr` INT NULL , ";
$sql3 .= " `prdt_pronum_okbuy` INT NULL , ";
$sql3 .= " `prdt_inven_day` INT NULL , ";
$sql3 .= " `prdt_comment` VARCHAR( 255 ) NULL , ";
$sql3 .= " `prdt_status` INT( 1 ) NULL  ";
$sql3 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb3 = mysql_query($sql3) or die(mysql_error());

$sql4 = " CREATE TABLE IF NOT EXISTS `numchai_db`.`prdt_temp_tb` ( ";
$sql4 .= " `prdt_temp_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
$sql4 .= " `pr_temp_id` INT  NOT NULL , ";
$sql4 .= " `prdt_temp_numrow` INT NOT  NULL , ";
$sql4 .= " `prdt_temp_procode` VARCHAR( 150 ) NULL , ";
$sql4 .= " `prdt_temp_proname` VARCHAR( 255 ) NULL , ";
$sql4 .= " `prdt_temp_proprice` DOUBLE( 10,2 ) NULL , ";
$sql4 .= " `prdt_temp_pronum_stock` INT NULL , ";
$sql4 .= " `prdt_temp_pronum_sell` INT NULL , ";
$sql4 .= " `prdt_temp_pronum_pr` INT NULL , ";
$sql4 .= " `prdt_temp_pronum_okbuy` INT NULL , ";
$sql4 .= " `prdt_temp_inven_day` INT NULL , ";
$sql4 .= " `prdt_temp_comment` VARCHAR( 255 ) NULL , ";
$sql4 .= " `prdt_temp_status` INT( 1 ) NULL  ";
$sql4 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb4 = mysql_query($sql4) or die(mysql_error()); 
 


$sql5 = " CREATE TABLE IF NOT EXISTS `rites_db`.`answer_tb` ( ";
$sql5 .= " `id_ans` INT NOT NULL AUTO_INCREMENT ,  ";
$sql5 .= " `detail_ans` TEXT NOT NULL ,  ";
$sql5 .= " `name_ans` VARCHAR( 30 ) NOT NULL , ";
$sql5 .= " `email_ans` VARCHAR( 30 ) NOT NULL , ";
$sql5 .= " `date_ans` DATE NOT NULL , ";
$sql5 .= " `ref_id` INT NOT NULL , " ;
$sql5 .= " PRIMARY KEY(`id_ans`)  ";
$sql5 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb5 = mysql_query($sql5) or die(mysql_error());

$sql6 = " CREATE TABLE IF NOT EXISTS `rites_db`.`repairing_tb` ( ";
$sql6 .= " `rep_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  ";
$sql6 .= " `rep_name` VARCHAR( 50 )  NOT NULL , ";
$sql6 .= " `rep_goods` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_date` DATE NOT NULL , ";
$sql6 .= " `rep_group` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_agen` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_phone` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_building` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_room` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_equip` VARCHAR( 50 )  NULL , ";
$sql6 .= " `rep_statedetail` TEXT  NULL , ";
$sql6 .= " `rep_status` VARCHAR( 10 )  NULL ,  ";
$sql6 .= " `rep_cause` TEXT  NULL  ";
$sql6 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

	$create_tb6 = mysql_query($sql6) or die(mysql_error());

$sql8 = " CREATE TABLE IF NOT EXISTS `rites_db`.`news_tb` ( ";
$sql8 .= " `id_new` INT NOT NULL AUTO_INCREMENT ,  ";
$sql8 .= " `title_new` VARCHAR(100) NOT NULL ,  ";
$sql8 .= " `detail_new` TEXT NOT NULL ,  ";
$sql8 .= " `type_new` INT(5) NOT NULL  ,  ";
$sql8 .= " `photo_new` VARCHAR(80) NULL ,  ";
$sql8 .= " `date_new` DATE NOT NULL ,  ";
$sql8 .= " `time_new` TIME NOT NULL  ,  ";
$sql8 .= " PRIMARY KEY(`id_new`)  ";
$sql8 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb8 = mysql_query($sql8) or die(mysql_error());
 *//*
$sql9 = " CREATE TABLE IF NOT EXISTS `chpro_db`.`pay_confirm_tb` ( ";
$sql9 .= " `pc_id` INT NOT NULL AUTO_INCREMENT ,  ";
$sql9 .= " `b_name` VARCHAR(80)  NULL ,  ";
$sql9 .= " `b_no` VARCHAR(80)  NULL ,  ";
$sql9 .= " `bb_name` VARCHAR(80)  NULL ,  ";
$sql9 .= " `b_a` DOUBLE( 10,2 )  NULL ,  ";
$sql9 .= " `rent_id` INT NULL ,  ";
$sql9 .= " PRIMARY KEY(`pc_id`)  ";
$sql9 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";
 
  $create_tb9 = mysql_query($sql9) or die(mysql_error());

$sql10 = " CREATE TABLE IF NOT EXISTS `chpro_db`.`pay_all_tb` ( ";
$sql10 .= " `pl_id` INT NOT NULL AUTO_INCREMENT ,  ";
$sql10 .= " `b_name` VARCHAR(80)  NULL ,  ";
$sql10 .= " `b_no` VARCHAR(80)  NULL ,  ";
$sql10 .= " `bb_name` VARCHAR(80)  NULL ,  ";
$sql10 .= " `b_a` DOUBLE( 10,2 )  NULL ,  ";
$sql10 .= " `rent_id` INT NULL ,  ";
$sql10 .= " PRIMARY KEY(`pl_id`)  ";
$sql10 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";
 
  $create_tb10 = mysql_query($sql10) or die(mysql_error());
  
$sql11 = " CREATE TABLE IF NOT EXISTS `chpro_db`.`blank_tb` ( ";
$sql11 .= " `blank_id` INT NOT NULL AUTO_INCREMENT ,  ";
$sql11 .= " `blank_name` VARCHAR(80)  NULL ,  ";
$sql11 .= " `blank_no` VARCHAR(80)  NULL ,  ";
$sql11 .= " `blank_name_con` VARCHAR(80)  NULL ,  ";
$sql11 .= " PRIMARY KEY(`blank_id`)  ";
$sql11 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

 $create_tb11 = mysql_query($sql11) or die(mysql_error());

$sql12 = " CREATE TABLE IF NOT EXISTS `chpro_db`.`har_rent_tb` ( ";
$sql12 .= " `date_rent_id` INT NOT NULL AUTO_INCREMENT ,  ";
$sql12 .= " `rent_id` INT NULL ,  ";
$sql12 .= " `date_new` DATE NULL ,  ";
$sql12 .= " `har_id` VARCHAR( 5 )  NULL , ";
$sql12 .= " `har_name` VARCHAR( 30 )  NULL , ";
$sql12 .= " `har_rent_price` DOUBLE( 10,2 )  NULL , ";
$sql12 .= " PRIMARY KEY(`date_rent_id`)  ";
$sql12 .= " ) ENGINE = InnoDB CHARACTER SET tis620 COLLATE tis620_thai_ci ";

	$create_tb12 = mysql_query($sql12) or die(mysql_error());
*/
mysql_close($c);
?>