 var json = [];
    $.get( "/statistics-data.txt", function( data){
       json2 = JSON.parse(data);
		console.log(json2);
		
	var json = json2[0]["@graph"];	
	var needle = 'https://cs.dbpedia.org';
	var needleName;
	for (var i = 0; i < json.length; i++) {
		if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfClasses"][0]["@value"];
		document.getElementById("numberOfClasses").innerHTML = needleName ;
		}

		if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfResourceWithType"][0]["@value"];
		document.getElementById("numberOfResourceWithType").innerHTML = needleName ;
		}
    
		if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfClassesWithResource"][0]["@value"];
		document.getElementById("numberOfClassesWithResource").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfDisambiguates"][0]["@value"];
		document.getElementById("numberOfDisambiguates").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfOutdegree"][0]["@value"];
		document.getElementById("numberOfOutdegree").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfPredicates"][0]["@value"];
		document.getElementById("numberOfPredicates").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfProperties"][0]["@value"];
		document.getElementById("numberOfProperties").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfPropertiesUsed"][0]["@value"];
		document.getElementById("numberOfPropertiesUsed").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfRedirectedResource"][0]["@value"];
		document.getElementById("numberOfRedirectedResource").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfResource"][0]["@value"];
		document.getElementById("numberOfResource").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfTriples"][0]["@value"];
		document.getElementById("numberOfTriples").innerHTML = needleName ;
		}
    
        if (json[i]["@id"] === needle) {
        needleName = json[i]["http://dbpedia.org/ontology/numberOfUniqeResources"][0]["@value"];
		document.getElementById("numberOfUniqeResources").innerHTML = needleName ;
		}
		
	}
 });