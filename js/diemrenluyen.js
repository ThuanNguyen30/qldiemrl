function tinhDiemtct1(selectObj) { 
	// get the index of the selected option 
	var idx = selectObj.selectedIndex; 
	//document.write(idx);
	var tongtct1 = idx*5;
	document.getElementById('tongtct1').value = tongtct1;

	var tct1 = parseInt(document.getElementById('tongtct1').value);
	var tcc1 = parseInt(document.getElementById('tongtcc1').value);
	document.getElementById('tongdiem').innerHTML = 100-tct1+tcc1;

}

function tinhDiemtcc1(selectObj) { 
	// get the index of the selected option 
	var idx = selectObj.selectedIndex; 
	//document.write(idx);
	var tongtcc1 = idx*10;
	document.getElementById('tongtcc1').value = tongtcc1;

	var tct1 = parseInt(document.getElementById('tongtct1').value);
	var tcc1 = parseInt(document.getElementById('tongtcc1').value);
	document.getElementById('tongdiem').value = 100-tct1+tcc1;

}

function hienthihk(selectObj) {
	var idx = selectObj.selectedIndex; 
	document.getElementById("myText").value = "Johnny Bravo";
}