<?php
echo "<style type='text/css'>
.panelfont {
	font-family : arial;
	color : black;
	font-size: 12pt;
}

.panel {
	position : relative;

	padding : 10px;
	border : 2px;
	box-shadow : inset 0 0 4px 1px #6a6747;
	border-radius: 10px;
	background : linear-gradient(white,#f8f8f8, white);
}

.bt {
	width : 30px;
	height : 30px;
	padding :10px;
	border :2px;
	box-shadow : inset 0 0 4px 1px #6a6747;
	border-radius : 20px;
	background : linear-gradient(white,white, white);
	cursor : pointer;
}

.table1 {	background : transparent;	}
.table2 {	background : white;	}
</style>";

echo "<table  width=100% height=100% class='table1'>
<tr align='center'>
<td>
	<table class='panelfont table2 panel'>
		<tr align='center'>
		<td>
			<table>
				<tr>
					<th><img src='glyphicons-197-circle-exclamation-mark.png'></th>
					<th>Confirmation</th>
				</tr>
				<tr><td colspan=2>&nbsp;</td></tr>
				<tr><td colspan=2>Are you sure want to delete ?</td></tr>
				<tr><td colspan=2>&nbsp;</td></tr>
			</table>
			<table>
				<tr align='center'>
					<td class='bt'>Yes</td>
					<td class='bt'>No</td>
				</tr>
			</table>
	</td>
	</tr>
	</table>
</td>;
</tr>
</table>";
?>
