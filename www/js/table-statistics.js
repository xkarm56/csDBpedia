var uri;
var columnName;
var select = document.getElementById("select");

function selectFunciton() {
  if (select.value == "0"){
	document.getElementById("result").innerHTML = ''; //clear table
	document.getElementById("columnName").innerHTML = '';//clear table name
	return;
  } 
  if (select.value == "1"){
	document.getElementById("result").innerHTML = ''; //clear table
	columnName = "Třídy podle počtu entit";
	document.getElementById("columnName").innerHTML = columnName;
	uri = "http://dbpedia.org/ontology/numberOfEntitiesOfClass"
  } 
   if (select.value == "2"){
	document.getElementById("result").innerHTML = '';//clear table
	columnName = "Počet užití propert (TOP 100)";
	document.getElementById("columnName").innerHTML = columnName;
    uri = "http://dbpedia.org/ontology/numberOfUseOfProperty";

  }
   if (select.value == "3"){
	document.getElementById("result").innerHTML = '';//clear table
	columnName = "Počet OutDegree zdrojů - TOP 100";
	document.getElementById("columnName").innerHTML = columnName;
    uri = "http://dbpedia.org/ontology/resourceOutDegree";
  }
   if (select.value == "4"){
	document.getElementById("result").innerHTML = '';//clear table
	columnName = "Počet InDegree zdrojů - TOP 100";
	document.getElementById("columnName").innerHTML = columnName;
    uri = "http://dbpedia.org/ontology/resourceInDegree";
  }  
   if (select.value == "5"){
	document.getElementById("result").innerHTML = '';//clear table
	columnName = "Počet InDegree Tříd";
	document.getElementById("columnName").innerHTML = columnName;
    uri = "http://dbpedia.org/ontology/numberOfClassIndegree";
  }  
  
  if (select.value == "6"){
	document.getElementById("result").innerHTML = '';//clear table
	columnName = "Entity podle InDegree - TOP 100";
	document.getElementById("columnName").innerHTML = columnName;
    uri = "http://dbpedia.org/ontology/numberOfEntityIndegree";
  }
  

   var json = [];
    $.get( "/statistics-data.txt", function( data){
json2 = JSON.parse(data);
		console.log(json2);
		
	var json = json2[0]["@graph"];				


		const regex = new RegExp('^' + uri, 'i');

		const filtered = json.filter((obj) => {
		const keys = Object.keys(obj);
		const found = keys.findIndex((key) => regex.test(key));
		return found > -1;
		});

		const mapped = filtered.map((obj) => {
		const keys = Object.keys(obj);
		return {
				id: obj[keys[0]],
				value: parseInt(obj[keys[1]][0]["@value"]),
			   }
		});


		var sorted = mapped.sort((a, b) => {
		if (a.value > b.value)
		return -1;
		if (a.value < b.value)
		return 1;
		return 0;
		});
		


		var result = document.getElementById("result");
		sorted.forEach((obj) => {
		result.innerHTML += '<tr><td></td><td>' + obj.id + '</td>' + '<td class="table-numbers">' + obj.value + '</td></tr>';
		});
  });	//end of loading json Array - esxternal file

}