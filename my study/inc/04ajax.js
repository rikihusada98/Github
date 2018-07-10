function tampilData(posisi)
{
	var namaKolom = [];
	var nilai = [];

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if (xhttp.readyState == 4 && xhttp.status == 200) 
		{

      var obj = JSON.parse(xhttp.responseText);
      for (var i=0; i<obj.length; i++)
      {

      	namaKolom.push(obj[i]['Nama_brg']);
      	nilai.push(obj[i]['Harga_Brg']);
      }


		}
		var ctx = document.getElementById(posisi).getContext("2d");
		var data =
		{

			labels : namaKolom,
			datasets: [
			{

				fillColor : "rgba (20,220,220,0.2)",
				strokeColor : "rgba (20,220,220,0.1)",
				pointColor : "rgba (20,220,220,0.1)",
				pointStrokeColor : "fff",
				pointHighlightFill: "fff",
				pointHighlightStroke : "rgba (20,220,220,0.1)"
				data : nilai

			}
		}
	};

	var chart = new Chart (ctx).Bar(data);

 }
};
	xhttp.open("GET","inc/persetujuan.php");
	xhttp.send();
}