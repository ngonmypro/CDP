<?
	$syear = $_GET['data'];
	$stext = $_GET['data2'];

	//echo "{$syear}, {$stext}";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<title> YongHouse Customer </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = yes, width = device-width">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" type="text/css" href="datatableexport/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="datatableexport/buttons.dataTables.min.css">

<script src="datatableexport/jquery-1.12.3.js"></script>
<script src="datatableexport/jquery.dataTables.min.js"></script>
<script src="datatableexport/dataTables.buttons.min.js"></script>
<script src="datatableexport/buttons.flash.min.js"></script>
<script src="datatableexport/jszip.min.js"></script>
<script src="datatableexport/pdfmake.min.js"></script>
<script src="datatableexport/vfs_fonts.js"></script>
<script src="datatableexport/buttons.html5.min.js"></script>
<script src="datatableexport/buttons.print.min.js"></script>
<script src="datatableexport/dataTables.fixedHeader.min.js"></script>
<script src="datatableexport/buttons.colVis.min.js"></script>

<script>
$(document).ready(function() {

	// Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" style="width:90%;"  />' );
    } );

    $('#example').DataTable( {

		fixedHeader: true,
		pagingType: 'full_numbers',
        dom: '<"toolbar">lBfrtip', //รูปแบบแสดงส่วนหัวเป็นปุ่ม
		//dom: 'Ftipr',   //รูปแบบไม่แสดงส่วนหัว
        buttons: [
            'copy', 'excel', 'print', 'colvis' //'csv','pdf',
        ],
		bLengthChange: true, //used to hide the property ปิดส่วนเลือกจำนวนที่จะให้แสดงในแต่ละหน้า
		language: {
            //"lengthMenu": "แสดง _MENU_ รายการ / หน้า ",//"Display _MENU_ records per page",
            //"zeroRecords": " Nothing found - sorry",
            //"info": " Showing page _PAGE_ of _PAGES_",
            //"infoEmpty": " No records available",
            //"infoFiltered": "(filtered from _MAX_ total records)"
			//buttons: {
                //"copy": 'คัดลอก'
			//}
			 //paginate: {
      		//	"previous": 'ถัดไป'
    		 //}
        },

		columns: [
    		null, //{ "width": "20%" },
    		{ "width": "30%" },
    		null,
    		null,
    		null,
			null,
			null,
			null,
			null
  		],

		"columnDefs": [
            {
                "targets": [ 5 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 7 ],
                "visible": false,
				"searchable": false
            }
        ],

		 order: [[ 8, "desc" ]],

		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]   //กำหนดจำนวนแสดงรายการแต่ละหน้า

    } );


	//เรียกใช้ฟังก์ชั่นเมื่อคลิกแถว
	$('#example tbody').on('click', 'tr', function () {
        var data = $('#example').DataTable().row( this ).data();
        //alert( 'You clicked on '+data[0]+'\'s row' );
		showmd(data[0],data[1],data[7],data[8]);
    } );


	<? if($syear==60){ ?>
		$("div.toolbar").html('<b>แต้มสะสมแลกของรางวัล ลูกค้าเครดิต สะสมแต้ม ตั้งแต่วันที่ 1 พฤศจิกายน 2559 - 31 ตุลาคม 2560</b>'); //แสดง Toolbar ที่สร้างเอง
	<?  }else if($syear==59){ ?>
		$("div.toolbar").html('<b>แต้มสะสมแลกของรางวัล ลูกค้าเครดิต สะสมแต้ม ตั้งแต่วันที่ 1 พฤศจิกายน 2558 - 31 ตุลาคม 2559</b>'); //แสดง Toolbar ที่สร้างเอง
	<? }else if($syear==61){ ?>
		$("div.toolbar").html('<b>แต้มสะสมแลกของรางวัล ลูกค้าเครดิต สะสมแต้ม ตั้งแต่วันที่ 1 พฤศจิกายน 2560 - 31 ตุลาคม 2561</b>');
		<? }else if($syear==62){ ?>
			$("div.toolbar").html('<b>แต้มสะสมแลกของรางวัล ลูกค้าเครดิต สะสมแต้ม ตั้งแต่วันที่ 1 พฤศจิกายน 2561 - 31 ตุลาคม 2562</b>');
		<? } ?>

	// Apply the search
    $('#example').DataTable().columns().every( function () {
        var that = this;

 	//ค้นหาจาก footer
    $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

	//สร้าง highlight row และ column
	 $('#example tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = $('#example').DataTable().cell(this).index().column;

            $( $('#example').DataTable().cells().nodes() ).removeClass( 'highlight' );
            $( $('#example').DataTable().column( colIdx ).nodes() ).addClass( 'highlight' );
        } );

} );
</script>


</head>

<body>
<?
	$yold = (date("Y")-2) + 543;
	$ynew = (date("Y")-1) + 543;

	if ($syear==59){
		$yold = $yold;
		$ynew = $ynew;
	}else if($syear==60){
		$yold = $yold+1;
		$ynew = $ynew+1;
	}else if($syear==61){
		$yold = $yold+2;
		$ynew = $ynew+2;
	}else if($syear==62){
		$yold = $yold+3;
		$ynew = $ynew+3;
	}

	//print "You Load Data : ".$_GET['data'];
?>
<input type="button" class="btn-info" value="เลือกช่วงวันที่" onClick="javascript:location.reload();">

<table id="example" class="display" cellspacing="0" width="100%"> <!--display nowrap-->
        <thead>
            <tr>
                <th>รหัสลูกค้า</th>
                <th>ชื่อลูกค้า</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>จำนวนเงินปี <?=$yold-1?></th>
                <th>จำนวนเงินปี <?=$ynew-1?></th>
                <th>เพิ่ม(-ลด) %</th>
                <th>แต้มสะสม ที่ได้รับ</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>รหัสลูกค้า</th>
                <th>ชื่อลูกค้า</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>จำนวนเงินปี <?=$yold-1?></th>
				<th>จำนวนเงินปี <?=$ynew-1?></th>
                <th>เพิ่ม(-ลด) %</th>
                <th>แต้มสะสม ที่ได้รับ</th>
            </tr>
        </tfoot>
        <tbody>
        <?
			include "Connections/connect_mysql.php";
			if($syear == 60){
				$sql="select * from totalpoint601 where pyear=60 and pointdt>0 ";
			}else if($syear == 59){
				$sql="select * from totalpoint where pointdt>0 ";
			}else if($syear == 61){
				$sql="select * from totalpoint61 where  pointdt>0 ";
			}else if($syear == 62){
				$sql="select * from totalpoint60 where  pointdt>0 ";
			}
			$result = mysql_query($sql) or die(mysql_error());
			while($record=mysql_fetch_array($result)){
				$custid = $record['custid'];
				$custcode = iconv('tis-620','utf-8',$record['custcode']);
				$custname = iconv('tis-620','utf-8',$record['custname']);
				$custaddr1 = iconv('tis-620','utf-8',$record['custaddr1']);
				$contdistrict = iconv('tis-620','utf-8',$record['contdistrict']);
				$contamphur = iconv('tis-620','utf-8',$record['contamphur']);
				$contprovince = iconv('tis-620','utf-8',$record['contprovince']);
				$contpostcode = iconv('tis-620','utf-8',$record['contpostcode']);
				$saold = $record['saold'];
				$sanew = $record['sanew'];
				$pointdt = $record['pointdt'];
				$p1 = $record['p1'];
		?>

            <tr style="cursor:pointer;">
                <td style="text-align:center;"><?=$custcode?></td>
                <td><?=$custname?></td>
                <td style="text-align:center;"><?=$contdistrict?></td>
                <td style="text-align:center;"><?=$contamphur?></td>
                <td style="text-align:center;"><?=$contprovince?></td>
                <td style="text-align:right;"><?=number_format($saold,2,'.',',')?></td>
                <td style="text-align:right;"><?=number_format($sanew,2,'.',',')?></td>
                <td style="text-align:right;"><?=number_format($p1,0,'.',',')?> % </td>
                <td style="text-align:right;"><?=number_format($pointdt,2,'.',',')?></td>
            </tr>

          <?
			}
			mysql_close($c); // ปิดการเชื่อมต่อ sql
		  ?>


        </tbody>
    </table>


</body>
</html>
