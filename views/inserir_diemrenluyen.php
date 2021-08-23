<?php if(!isset($_GET['editar'])){ ?>


<h1>Đánh giá điểm rèn luyện</h1>
<script src="js/diemrenluyen.js"></script>
<form method="post" action="processa_diemrenluyen.php">
    <table style="border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width:97.8pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>Th&aacute;ng</span></strong></p>
            </td>
            <td style="width:76.2pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>
                <select name="thang" id="thang" style="width: 150px;" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select></span></strong></p>
            </td>
            <td style="width: 76.2pt;padding: 0cm 5.4pt;vertical-align: top;">


                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>Học kỳ</span></strong></p>
            </td>
            <td style="width: 76.2pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>
                <select name="hocky" id="hocky" style="width: 150px;" >
                <option value="Học Kỳ 1">Học Kỳ 1</option>
                <option value="Học Kỳ 2">Học Kỳ 2</option>
                </select>
                </span></strong></p>
            </td>
            <td style="width: 76.2pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>Năm học</span></strong></p>
            </td>
            <td style="width: 76.2pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-family:"Times New Roman",serif;'>
                <select name="namhoc" id="namhoc" style="width: 150px;" >
                <option value="2021-2022">2021-2022</option>
                <option value="2022-2023">2022-2023</option>
                <option value="2023-2024">2023-2024</option>
                <option value="2024-2025">2024-2025</option>

                </select></span></strong></p>
            </td>
        </tr>
		</tbody>
	</table>
	</br>

	<table> <tbody>
	<tr><td><input class="form-control"  type="hidden" name="idp" value="<?php echo $_GET['idp']?>" ></td></tr>
	</tbody></table>
    
    <table style="border-collapse:collapse;border:none;" class="table-bordered table-striped table-hover">
    <tbody>
        <tr>
            <td style="width:155.7pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width:4.0cm;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Ti&ecirc;u ch&iacute;</span></strong></p>
            </td>
            <td style="width:106.3pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Số lần</span></strong></p>
            </td>
            <td style="width:92.1pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Điểm</span></strong></p>
            </td>
            <td style="width:92.1pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Minh chứng</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:155.7pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Ti&ecirc;u ch&iacute; cộng điểm</span></strong></p>
            </td>
            <td style="width:4.0cm;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>Đi trễ</span></p>
            </td>
            <td style="width:106.3pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>
                <select name="tct1" id="tct1" style="width: 50px;" onchange="tinhDiemtct1(this);">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select></span></p>
            </td>
            <td style="width:92.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>
                <input id="tongtct1" name ="tongtct1" value=0 style="width: 100px;text-align:center;"></input></span></p>
            </td>
        </tr>
        <tr>
            <td style="width:155.7pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;'>Ti&ecirc;u ch&iacute; trừ điểm</span></strong></p>
            </td>
            <td style="width:4.0cm;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>Giải QG</span></p>
            </td>
            <td style="width:106.3pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'> 
                <select name="tct1" id="tct1" style="width: 50px;" onchange="tinhDiemtcc1(this);">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select></span></p>
            </td>
            <td style="width:92.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>
                <input id="tongtcc1"  name ="tongtcc1" value=0 style="width: 100px;text-align:center;"></input></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width:375.4pt;border:solid windowtext 1.0pt;border-top:none;background:yellow;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:20px;font-family:"Times New Roman",serif;color:black;'>Tổng điểm</span></strong></p>
            </td>
            <td style="width:92.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:20px;font-family:"Times New Roman",serif;'>&nbsp;
                <input id="tongdiem" name = "tongdiem" value=0 style="width: 100px;text-align:center;"></input></span></p>

            </td>
        </tr>
    </tbody>
</table>
<input class="btn btn-success" type="submit" value="Thêm mới">



</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_users)){ ?>
		<?php if($linha['username'] == $_GET['editar']){ ?>

			<h1>Editing Class</h1>
			<form method="post" action="edita_user.php">
				<input type="hidden" name="username" value="<?php echo $linha['username']; ?>">
				<br>
				<label class="badge badge-secondary">Username</label><br>
				<input class="form-control" type="text" name="username"  value="<?php echo $linha['username']; ?>">
				<br><br>
				<label class="badge badge-secondary">Password</label><br>
				<input class="form-control" type="password" name="password"   value="<?php echo $linha['password']; ?>">
				<br><br>
				<label class="badge badge-secondary">Permission</label><br>
				<input class="form-control" type="text" name="quyen"   value="<?php echo $linha['quyen']; ?>">
				<br><br>
				<label class="badge badge-secondary">Full Name</label><br>
				<input class="form-control" type="text" name="hoten"   value="<?php echo $linha['hoten']; ?>">
				<br><br>
				<label class="badge badge-secondary">Date of Birth</label><br>
				<input class="form-control" type="text" name="ngaysinh"   value="<?php echo $linha['ngaysinh']; ?>">
				<br><br>
				<p class="badge badge-secondary">ClassName</p>
				<select class="form-control" name="malop">
					<option value="">ClassName</option>
					<?php 
						while($data = mysqli_fetch_array($consulta_lop)){
							if ($data['malop'] == $linha['malop']) {
								echo '<option selected value="'.$data['malop'].'">'.$data['tenlop'].'</option>';
							}else {echo '<option value="'.$data['malop'].'">'.$data['tenlop'].'</option>';}
					}
					?>
				</select>
				<br><br>
				
				<input type="submit" class="btn btn-dark" value="Bổ sung">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>