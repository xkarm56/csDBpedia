
<!----------SPARQL ALBUM  -------------------------->

<div id="sparql-album1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Album> .
							}
">

</div>
	   
<div id="sparql-album2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Album> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-album3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Album>. 
        }
">
</div>


<div id="sparql-album4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Album>. 
							}


">
</div>

<div id="sparql-album5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?DruhAlba COUNT(?album ) as ?ENTIT
							{
							?album rdf:type <http://dbpedia.org/ontology/Album>.
							?album <http://dbpedia.org/ontology/musicFormat> ?DruhAlba.
							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-album6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?UMELEC COUNT(?album ) as ?ENTIT
							{ ?album rdf:type <http://dbpedia.org/ontology/Album>.
							   ?album <http://dbpedia.org/ontology/artist> ?artist.
							   ?artist rdfs:label ?UMELEC.
							}
							ORDER BY DESC(?ENTIT)


">
</div>

<div id="sparql-album7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?album ) as ?ENTIT
								{
								?album rdf:type <http://dbpedia.org/ontology/Album>.
								?album <http://dbpedia.org/ontology/genre> ?genre .
								?genre rdfs:label ?ZANR.
								}
								ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-album8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?OriginalniJazyk COUNT(?album ) as ?ENTIT

							{
							?album rdf:type <http://dbpedia.org/ontology/Album>.
							?album <http://dbpedia.org/ontology/originalLanguage> ?language.
							?language rdfs:label ?OriginalniJazyk.
							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-album9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ALBUM COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Album>. 
							?resource rdfs:label ?ALBUM.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-album10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ALBUM COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Album>. 
							  ?indegree rdfs:label ?ALBUM.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>




<!----------SPARQL ALBUM  KONEC-------------------------->




<!----------SPARQL ATLET  -------------------------->
<div id="sparql-atlet1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT (DISTINCT (?jmeno)) as ?ENTIT
							WHERE {
							?jmeno a dbpedia-owl:Athlete.
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							}	

">

</div>
	   
<div id="sparql-atlet2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(*) as ?TROJIC
							WHERE {
							?jmeno  a dbpedia-owl:Athlete.
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							?jmeno ?p ?o
							}


">
</div>


<div id="sparql-atlet3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select count(?object) as ?OutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Athlete>. 
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							}

">
</div>


<div id="sparql-atlet4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?odkaz) as ?InDegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Athlete>.
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							}



">
</div>

<div id="sparql-atlet5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select ?ENTITA count(?object) as ?EntityOutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Athlete>. 
							?subject rdfs:label ?ENTITA.
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							}
							ORDER BY DESC(?EntityOutDegree)
							LIMIT 100
">
</div>


<div id="sparql-atlet6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?odkaz) as ?EntityInDegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Athlete>.
							?instance rdfs:label ?ENTITA.
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Atletika.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Lehká_atletika.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_Evropy_v_atletice.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Mistrovství_světa_v_atletice.}
							}
							ORDER BY DESC(?EntityInDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ATLET KONEC-------------------------->



<!----------SPARQL AUTOMOBIL  -------------------------->

<div id="sparql-automobil1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Automobile> .
							}
">

</div>
	   
<div id="sparql-automobil2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Automobile> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-automobil3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Automobile>. 
        }
">
</div>


<div id="sparql-automobil4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Automobile>. 
							}


">
</div>

<div id="sparql-automobil5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?AUTOMOBIL COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Automobile>. 
							?resource rdfs:label ?AUTOMOBIL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-automobil6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?AUTOMOBIL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Automobile>. 
							  ?indegree rdfs:label ?AUTOMOBIL.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL AUTOMOBIL KONEC-------------------------->


<!----------SPARQL BARVA  -------------------------->
<div id="sparql-barva1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Colour> .
							}
">

</div>
	   
<div id="sparql-barva2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Colour> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-barva3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Colour>. 
        }
">
</div>


<div id="sparql-barva4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Colour>. 
							}


">
</div>

<div id="sparql-barva5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BARVA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Colour>. 
							?resource rdfs:label ?BARVA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-barva6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BARVA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Colour>. 
							  ?indegree rdfs:label ?BARVA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL BARVA KONEC-------------------------->

<!----------SPARQL BOJOVÉ VOZIDLO  -------------------------->

<div id="sparql-bojove-vozidlo1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MilitaryVehicle> .
							}
">

</div>
	   
<div id="sparql-bojove-vozidlo2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryVehicle> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-bojove-vozidlo3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryVehicle>. 
        }
">
</div>


<div id="sparql-bojove-vozidlo4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryVehicle>. 
							}


">
</div>

<div id="sparql-bojove-vozidlo5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BojoveVozidlo COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryVehicle>. 
							?resource rdfs:label ?BojoveVozidlo.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-bojove-vozidlo6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BojoveVozidlo COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryVehicle>. 
							  ?indegree rdfs:label ?BojoveVozidlo.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL BOJOVÉ VOZIDLO KONEC-------------------------->


<!----------SPARQL BUDOVA  -------------------------->

<div id="sparql-budova1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Building> .
							}
">

</div>
	   
<div id="sparql-budova2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Building> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-budova3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Building>. 
        }
">
</div>


<div id="sparql-budova4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Building>. 
							}


">
</div>

<div id="sparql-budova5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BUDOVA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Building>. 
							?resource rdfs:label ?BUDOVA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-budova6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BUDOVA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Building>. 
							  ?indegree rdfs:label ?BUDOVA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL BUDOVA KONEC-------------------------->


<!----------SPARQL CYKLISTICKÝ ZÁVOD  -------------------------->
<div id="sparql-cyklisticky-zavod1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/CyclingCompetition> .
							}
">

</div>
	   
<div id="sparql-cyklisticky-zavod2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/CyclingCompetition> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-cyklisticky-zavod3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/CyclingCompetition>. 
        }
">
</div>


<div id="sparql-cyklisticky-zavod4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/CyclingCompetition>. 
							}


">
</div>

<div id="sparql-cyklisticky-zavod5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BARVA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/CyclingCompetition>. 
							?resource rdfs:label ?BARVA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-cyklisticky-zavod6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?CyklistickyZavod COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/CyclingCompetition>. 
							  ?indegree rdfs:label ?CyklistickyZavod.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL CYKLISTICKÝ ZÁVOD KONEC-------------------------->


<!----------SPARQL ČESKÁ OBEC  -------------------------->
<div id="sparql-ceska-obec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(DISTINCT(?instance)) AS ?ENTIT
							WHERE {
							?instance rdf:type dbpedia-owl:Settlement.
							 {?instance prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Česko.}
							}

">

</div>
	   
<div id="sparql-ceska-obec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="select count(*) as ?TROJIC 
							{
							 ?s a dbpedia-owl:Settlement. 
							 {?s  prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?s  prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?s  prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?s  prop-cs:země dbpedia-cs:Česko.}
							 ?s ?p ?o . 
							}



">
</div>


<div id="sparql-ceska-obec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?instance) as ?OutDegree
							WHERE {

							?instance dbpedia-owl:wikiPageWikiLink ?odkaz.
							?instance a dbpedia-owl:Settlement. 
							 {?instance prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Česko.}
							}

">
</div>


<div id="sparql-ceska-obec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?odkaz) as ?InDegree
							WHERE {

							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance a dbpedia-owl:Settlement. 
							 {?instance prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Česko.}
							}

">
</div>

<div id="sparql-ceska-obec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?instance) as ?EntityOutDegree
							WHERE {

							?instance dbpedia-owl:wikiPageWikiLink ?odkaz.
							?instance a dbpedia-owl:Settlement. 
							?instance rdfs:label ?ENTITA.
							 {?instance prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Česko.}
							}
							ORDER BY DESC(?EntityOutDegree)
							LIMIT 100
">
</div>


<div id="sparql-ceska-obec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?odkaz) as ?EntityIndegree
							WHERE {

							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance a dbpedia-owl:Settlement. 
							?instance rdfs:label ?ENTITA.
							 {?instance prop-cs:země dbpedia-cs:Slezsko.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Čechy.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Morava.}
							UNION
							 {?instance prop-cs:země dbpedia-cs:Česko.}
							}
							ORDER BY DESC(?EntityIndegree)
							LIMIT 100

">
</div>
<!----------SPARQL ČESKÁ OBEC KONEC-------------------------->


<!----------SPARQL DESKOVÁ HRA  -------------------------->
<div id="sparql-deskova-hra1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Game> .
							}
">

</div>
	   
<div id="sparql-deskova-hra2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Game> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-deskova-hra3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Game>. 
        }
">
</div>


<div id="sparql-deskova-hra4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Game>. 
							}


">
</div>

<div id="sparql-deskova-hra5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?DeskovaHra COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Game>. 
							?resource rdfs:label ?DeskovaHra.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-deskova-hra6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?DeskovaHra COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Game>. 
							  ?indegree rdfs:label ?DeskovaHra.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL DESKOVÁ HRA KONEC-------------------------->



<!----------SPARQL FARNOST  -------------------------->
<div id="sparql-farnost1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Parish> .
							}
">

</div>
	   
<div id="sparql-farnost2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Parish> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-farnost3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Parish>. 
        }
">
</div>


<div id="sparql-farnost4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Parish>. 
							}


">
</div>

<div id="sparql-farnost5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FARNOST COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Parish>. 
							?resource rdfs:label ?FARNOST.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-farnost6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FARNOST COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Parish>. 
							  ?indegree rdfs:label ?FARNOST.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FARNOST KONEC-------------------------->



<!----------SPARQL FILM  -------------------------->

<div id="sparql-film1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Film> .
							}
">
</div>
	   
<div id="sparql-film2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Film> .
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-film3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Film>. 
							}
">
</div>


<div id="sparql-film4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Film>. 
							}	


">
</div>

<div id="sparql-film5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?film) as ?ENTIT
							{
							?film rdf:type <http://dbpedia.org/ontology/Film>.
							?film <http://dbpedia.org/ontology/genre> ?genre.
							?genre rdfs:label ?ZANR.
							}
							ORDER BY DESC(?ENTIT)



">
</div>

<div id="sparql-film6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FILM ?DelkaTrvani

							{
							?resource rdf:type <http://dbpedia.org/ontology/Film>.
							?resource <http://dbpedia.org/ontology/runtime> ?DelkaTrvani.
							?resource rdfs:label ?FILM.
							}
							ORDER BY DESC(?DelkaTrvani)

">
</div>

<div id="sparql-film7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZEME COUNT(?film) as ?ENTIT

							{
							?film rdf:type <http://dbpedia.org/ontology/Film>.
							?film <http://dbpedia.org/ontology/country> ?country.
							?country rdfs:label ?ZEME.
							}
							ORDER BY DESC(?ENTIT)



">
</div>

<div id="sparql-film8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?JAZYK COUNT(?film) as ?ENTIT

							{
							?film rdf:type <http://dbpedia.org/ontology/Film>.
							?film <http://dbpedia.org/ontology/language> ?language.
							?language rdfs:label ?JAZYK.
							}
							ORDER BY DESC(?ENTIT)
">
</div>


<div id="sparql-film9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FILM ?ROZPOCET 

						{
						?resource rdf:type <http://dbpedia.org/ontology/Film>.
						?resource <http://dbpedia.org/ontology/budget> ?ROZPOCET.
						?resource rdfs:label ?FILM.
						}
						ORDER BY DESC(?ROZPOCET)
">
</div>

<div id="sparql-film10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FILM ?TRZBY

							{
							?resource rdf:type <http://dbpedia.org/ontology/Film>.
							?resource <http://dbpedia.org/ontology/gross> ?TRZBY.
							?resource rdfs:label ?FILM.
							}
							ORDER BY DESC(?TRZBY)

">
</div>

<div id="sparql-film11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FILM COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Film>. 
							?resource rdfs:label ?FILM.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-film12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FILM COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Film>. 
							?indegree rdfs:label ?FILM.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FILM KONEC -------------------------->


<!----------SPARQL FILMOVY FESTIVAL  -------------------------->
<div id="sparql-filmovy-festival1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/FilmFestival> .
							}
">

</div>
	   
<div id="sparql-filmovy-festival2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/FilmFestival> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-filmovy-festival3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FilmFestival>. 
        }
">
</div>


<div id="sparql-filmovy-festival4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FilmFestival>. 
							}


">
</div>

<div id="sparql-filmovy-festival5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FilmovyFestival COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FilmFestival>. 
							?resource rdfs:label ?FilmovyFestival.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-filmovy-festival6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FilmovyFestival COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FilmFestival>. 
							  ?indegree rdfs:label ?FilmovyFestival.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FILMOVY FESTIVAL KONEC-------------------------->


<!----------SPARQL FIRMA  -------------------------->

<div id="sparql-firma1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Company> .
							}
">
</div>
	   
<div id="sparql-firma2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Company> .
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-firma3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Company>. 
							}
">
</div>


<div id="sparql-firma4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Company>. 
							}
">
</div>


<div id="sparql-firma5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?MESTO COUNT(?company) as ?ENTIT
							{
							?company rdf:type <http://dbpedia.org/ontology/Company>.
							?company <http://dbpedia.org/ontology/locationCity> ?sidlo.
							?sidlo rdfs:label ?MESTO.
							

							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-firma6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?PRUMYSL COUNT(?company) as ?ENTIT
							{
							?company rdf:type <http://dbpedia.org/ontology/Company>.
							?company <http://dbpedia.org/ontology/industry> ?o.
							?o rdfs:label ?PRUMYSL.

							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-firma7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SLUZBA COUNT(?company) as ?ENTITY
							{
							?company rdf:type <http://dbpedia.org/ontology/Company>.
							?company <http://dbpedia.org/ontology/service> ?o.
							?o rdfs:label ?SLUZBA.

							}
							ORDER BY DESC(?ENTITY)

">
</div>


<div id="sparql-firma8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FIRMA ?ZAMESTNANCU 
							{
							?s rdf:type <http://dbpedia.org/ontology/Company>.
							?s rdfs:label ?FIRMA.
							?s <http://dbpedia.org/ontology/numberOfEmployees> ?ZAMESTNANCU.
							}
							ORDER BY DESC(?ZAMESTNANCU)

">
</div>

<div id="sparql-firma9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FIRMA ?VysledekHospodareni
							{
							?s rdf:type <http://dbpedia.org/ontology/Company>.
							?s rdfs:label ?FIRMA.
							?s <http://dbpedia.org/ontology/netIncome> ?VysledekHospodareni.
							}
							ORDER BY DESC(?VysledekHospodareni)

">
</div>

<div id="sparql-firma10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FIRMA ?AKTIVA
							{
							?s rdf:type <http://dbpedia.org/ontology/Company>.
							?s rdfs:label ?FIRMA.
							?s <http://dbpedia.org/ontology/assets> ?AKTIVA.
							}
							ORDER BY DESC(?AKTIVA)
">
</div>

<div id="sparql-firma11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FIRMA ?KAPITAL
							{
							?s rdf:type <http://dbpedia.org/ontology/Company>.
							?s rdfs:label ?FIRMA.
							?s <http://dbpedia.org/ontology/equity> ?KAPITAL.
							}
							ORDER BY DESC(?KAPITAL)

"></div>

<div id="sparql-firma12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FIRMA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Company>. 
							?resource rdfs:label ?FIRMA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-firma13" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FIRMA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Company>. 
							?indegree rdfs:label ?FIRMA.
							}
							
							ORDER BY DESC(?InDegree)
							LIMIT 100
">
</div>

<!----------SPARQL FIRMA KONEC -------------------------->

<!----------SPARQL FOBALISTA  -------------------------->
 <div id="sparql-fotbalista1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerPlayer> .
							}
">
</div>
	   
<div id="sparql-fotbalista2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Album> .
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-fotbalista3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
						  WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							  ?resource rdf:type <http://dbpedia.org/ontology/SoccerPlayer>. 
							}
">
</div>


<div id="sparql-fotbalista4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
						  WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SoccerPlayer>. 
							}


">
</div>

<div id="sparql-fotbalista5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TEAM COUNT(DISTINCT (?player)) as ?ENTIT
							{
							?player a <http://dbpedia.org/ontology/SoccerPlayer>.
							?player <http://dbpedia.org/ontology/club> ?club.
							?club rdfs:label ?TEAM.
							}
							ORDER BY DESC(?ENTIT)
							LIMIT 100


">
</div>

<div id="sparql-fotbalista6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA ?vyska
							  {
							  ?player a <http://dbpedia.org/ontology/SoccerPlayer>.
							  ?player <http://dbpedia.org/ontology/height> ?vyska.
							  ?player rdfs:label ?FOTBALISTA.
							  }
								ORDER BY DESC(?vyska)
								LIMIT 100

">
</div>

<div id="sparql-fotbalista7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA ?vaha
							  {
							  ?player a <http://dbpedia.org/ontology/SoccerPlayer>.
							  ?player <http://dbpedia.org/ontology/weight> ?vaha.
							  ?player rdfs:label ?FOTBALISTA.
							  }
								ORDER BY DESC(?vaha)
								LIMIT 100
">
</div>

<div id="sparql-fotbalista8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA ?goly
							  {
							   ?player a <http://dbpedia.org/ontology/SoccerPlayer>.
							   ?player <http://dbpedia.org/ontology/goalsInLeague> ?goly.
							   ?player rdfs:label ?FOTBALISTA.
							  }
								ORDER BY DESC(?goly)

">
</div>


<div id="sparql-fotbalista9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA ?GOLU
						  {
						   ?player a <http://dbpedia.org/ontology/SoccerPlayer>.
						   ?player <http://dbpedia.org/ontology/goalsInNationalTeam> ?GOLU.
						    ?player rdfs:label ?FOTBALISTA.
						  }
							ORDER BY DESC(?GOLU)

">
</div>


<div id="sparql-fotbalista10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT  ?MistoNarozeni COUNT (DISTINCT(?player)) as ?ENTIT
							{
							?player a <http://dbpedia.org/ontology/SoccerPlayer>.
							 ?player <http://dbpedia.org/ontology/birthPlace> ?birthPlace.
							 ?birthPlace rdfs:label ?MistoNarozeni.
							 }
							ORDER BY DESC(?ENTIT)


">
</div>

<div id="sparql-fotbalista11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerPlayer>. 
							?resource rdfs:label ?FOTBALISTA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100

">
</div>


<div id="sparql-fotbalista12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FOTBALISTA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/SoccerPlayer>. 
							?indegree rdfs:label ?FOTBALISTA.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FOBALISTA KONEC -------------------------->


<!----------SPARQL FOTBALOVÁ SEZÓNA  -------------------------->
<div id="sparql-fotbalova-sezona1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason> .
							}
">

</div>
	   
<div id="sparql-fotbalova-sezona2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-fotbalova-sezona3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason>. 
        }
">
</div>


<div id="sparql-fotbalova-sezona4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason>. 
							}


">
</div>

<div id="sparql-fotbalova-sezona5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FotbalovaSezona COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason>. 
							?resource rdfs:label ?FotbalovaSezona.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-fotbalova-sezona6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FotbalovaSezona COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SoccerLeagueSeason>. 
							  ?indegree rdfs:label ?FotbalovaSezona.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FOTBALOVÁ SEZÓNA KONEC-------------------------->


<!----------SPARQL FOTBALOVÝ KLUB  -------------------------->
<div id="sparql-fotbalovy-klub1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/SoccerClub> .
							}
">

</div>
	   
<div id="sparql-fotbalovy-klub2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/SoccerClub> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-fotbalovy-klub3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerClub>. 
        }
">
</div>


<div id="sparql-fotbalovy-klub4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SoccerClub>. 
							}


">
</div>

<div id="sparql-fotbalovy-klub5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FotbalovyKlub COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SoccerClub>. 
							?resource rdfs:label ?FotbalovyKlub.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-fotbalovy-klub6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?FotbalovyKlub COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SoccerClub>. 
							  ?indegree rdfs:label ?FotbalovyKlub.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FOTBALOVÝ KLUB KONEC-------------------------->


<!----------SPARQL FRANCOUZSKÝ KANTON  -------------------------->
<div id="sparql-francouzsky-kanton1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT (count(distinct ?jmeno ) as ?ENTIT)
							WHERE {
							?jmeno rdf:type <http://dbpedia.org/ontology/Region>.
							{?jmeno   prop-cs:názevKantonu ?nazev.}
							UNION
							{?jmeno  dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							}

">

</div>
	   
<div id="sparql-francouzsky-kanton2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(*) as ?TROJIC
							WHERE {
							?instance rdf:type <http://dbpedia.org/ontology/Region>.
							{?instance prop-cs:názevKantonu ?nazev.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							?instance ?p ?o
							}


">
</div>


<div id="sparql-francouzsky-kanton3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select count(?object) as ?OutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Region>. 
							{?subject prop-cs:názevKantonu ?nazev.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							}

">
</div>


<div id="sparql-francouzsky-kanton4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?odkaz) as ?InDegree
							WHERE {

							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Region>.
							{?instance prop-cs:názevKantonu ?nazev.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							}



">
</div>

<div id="sparql-francouzsky-kanton5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select ?ENTITA count(?object) as ?EntityOutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Region>. 
							?subject rdfs:label ?ENTITA.
							{?subject prop-cs:názevKantonu ?nazev.}
							UNION
							{?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							}
							ORDER BY DESC(?EntityOutDegree)
							LIMIT 100
">
</div>


<div id="sparql-francouzsky-kanton6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?odkaz) as ?EntityInDegree
							WHERE {

							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Region>.
							?instance rdfs:label ?ENTITA.	
							{?instance prop-cs:názevKantonu ?nazev.}
							UNION
							{?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Francouzský_kanton.}
							}
							ORDER BY DESC(?EntityInDegree)
							LIMIT 100

">
</div>
<!----------SPARQL FRANCOUZSKÝ KANTON KONEC-------------------------->


<!----------SPARQL HEREC  -------------------------->
<div id="sparql-herec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Actor> .
							}
">

</div>
	   
<div id="sparql-herec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Actor> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-herec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Actor>. 
        }
">
</div>


<div id="sparql-herec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Actor>. 
							}


">
</div>

<div id="sparql-herec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HEREC COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Actor>. 
							?resource rdfs:label ?HEREC.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-herec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HEREC COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Actor>. 
							  ?indegree rdfs:label ?HEREC.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL HEREC KONEC-------------------------->


<!----------SPARQL HOKEJISTA  -------------------------->
<div id="sparql-hokejista1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer> .
							}
">
</div>
	   
<div id="sparql-hokejista2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer> .
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-hokejista3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>. 
							}
">
</div>


<div id="sparql-hokejista4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>. 
							}


">
</div>


<div id="sparql-hokejista5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?HOKEJISTA ?VYSKA
							{
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>.
							?resource  <http://dbpedia.org/ontology/height> ?VYSKA.
							?resource rdfs:label ?HOKEJISTA.
							}
							ORDER BY DESC(?VYSKA)
							

">
</div>


<div id="sparql-hokejista6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?HOKEJISTA ?VAHA
							{
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>.
							?resource  <http://dbpedia.org/ontology/weight> ?VAHA.
							?resource rdfs:label ?HOKEJISTA.
							}
							ORDER BY DESC(?VAHA)
							

">
</div>

<div id="sparql-hokejista7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?DraftujiciClub COUNT(?icehockeyplayer) as ?PocetHokejistu

							{
							?icehockeyplayer rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>.
							?icehockeyplayer  <http://dbpedia.org/ontology/draftTeam> ?label.
							?label rdfs:label ?DraftujiciClub.
							}
							ORDER BY DESC(?PocetHokejistu)
">
</div>

<div id="sparql-hokejista8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HOKEJISTA COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>. 
							?resource rdfs:label ?HOKEJISTA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hokejista9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HOKEJISTA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/IceHockeyPlayer>. 
							?indegree rdfs:label ?HOKEJISTA.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100
">
</div>
<!----------SPARQL HOKEJISTA KONEC -------------------------->


<!----------SPARQL HOKEJOVÝ KLUB  -------------------------->
<div id="sparql-hokejovy-klub1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/HockeyTeam> .
							}
">

</div>
	   
<div id="sparql-hokejovy-klub2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/HockeyTeam> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-hokejovy-klub3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/HockeyTeam>. 
        }
">
</div>


<div id="sparql-hokejovy-klub4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/HockeyTeam>. 
							}


">
</div>

<div id="sparql-hokejovy-klub5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?BARVA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/HockeyTeam>. 
							?resource rdfs:label ?BARVA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hokejovy-klub6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniFestival COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/HockeyTeam>. 
							  ?indegree rdfs:label ?HudebniFestival.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL HUDEBNÍ FESTIVAL KONEC-------------------------->


<!----------SPARQL HUDEBNÍ NÁSTROJ  -------------------------->
<div id="sparql-hudebni-nastroj1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Instrument> .
							}
">

</div>
	   
<div id="sparql-hudebni-nastroj2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Instrument> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-hudebni-nastroj3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Instrument>. 
        }
">
</div>


<div id="sparql-hudebni-nastroj4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Instrument>. 
							}


">
</div>

<div id="sparql-hudebni-nastroj5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniNastroj COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Instrument>. 
							?resource rdfs:label ?HudebniNastroj.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hudebni-nastroj6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniNastroj COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Instrument>. 
							  ?indegree rdfs:label ?HudebniNastroj.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL HOKEJOVÝ KLUB KONEC-------------------------->


<!----------SPARQL HORA  -------------------------->

<div id="sparql-hora1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						    WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Mountain> .
							}
">
</div>
	   
<div id="sparql-hora2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE{
							?resource rdf:type <http://dbpedia.org/ontology/Mountain> .
                            ?resource ?p ?o.
                            }

">
</div>


<div id="sparql-hora3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
						   WHERE
						   { 
						   ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
						   ?resource rdf:type <http://dbpedia.org/ontology/Mountain>. 
						   }
">
</div>


<div id="sparql-hora4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Mountain>. 
							}


">
</div>

<div id="sparql-hora5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?HORA ?VRCHOL

							{
							?label rdf:type <http://dbpedia.org/ontology/Mountain>.
							?label <http://dbpedia.org/ontology/elevation> ?VRCHOL.
							?label rdfs:label ?HORA.
							}
							ORDER BY DESC(?VRCHOL)
							LIMIT 100

">
</div>

<div id="sparql-hora6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?POHORI COUNT(?moutain) as ?PocetHor

							{
							?moutain rdf:type <http://dbpedia.org/ontology/Mountain>.
							?moutain <http://dbpedia.org/ontology/mountainRange> ?label.
							?label rdfs:label ?POHORI.
							}
							ORDER BY DESC(?PocetHor)



">
</div>

<div id="sparql-hora7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HORA COUNT(?resource) AS ?OutDegree
						   WHERE
						   { 
						   ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
						   ?resource rdf:type <http://dbpedia.org/ontology/Mountain>. 
						   ?resource rdfs:label ?HORA.
						   }
						   ORDER BY DESC(?OutDegree)
						   LIMIT 100
">
</div>


<div id="sparql-hora8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HORA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Mountain>. 
							?indegree rdfs:label ?HORA.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL HORA KONEC -------------------------->




<!----------SPARQL HUDEBNÍ FESTIVAL  -------------------------->
<div id="sparql-hudebni-festival1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MusicFestival> .
							}
">

</div>
	   
<div id="sparql-hudebni-festival2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MusicFestival> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-hudebni-festival3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicFestival>. 
        }
">
</div>


<div id="sparql-hudebni-festival4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MusicFestival>. 
							}


">
</div>

<div id="sparql-hudebni-festival5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniFestival COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicFestival>. 
							?resource rdfs:label ?HudebniFestival.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hudebni-festival6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniFestival COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MusicFestival>. 
							  ?indegree rdfs:label ?HudebniFestival.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL HUDEBNÍ FESTIVAL KONEC-------------------------->






<!----------SPARQL HUDEBNÍ UMĚLEC  -------------------------->

<div id="sparql-hudebni-umelec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						    WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MusicalArtist> .
							}
">
</div>
	   
<div id="sparql-hudebni-umelec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MusicalArtist> .
                            ?resource ?p ?o.
                          }

">
</div>


<div id="sparql-hudebni-umelec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicalArtist>. 
							}
">
</div>


<div id="sparql-hudebni-umelec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
						    WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/MusicalArtist>. 
							}


">
</div>

<div id="sparql-hudebni-umelec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniNastroj COUNT(?musicalArtist) as ?HudebnichUmelcu
								{
								?musicalArtist rdf:type <http://dbpedia.org/ontology/MusicalArtist>.
								?musicalArtist <http://dbpedia.org/ontology/instrument> ?label.
								?label rdfs:label ?HudebniNastroj.
								}
								ORDER BY DESC(?HudebnichUmelcu)
								LIMIT 50


">
</div>

<div id="sparql-hudebni-umelec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?styl COUNT(?musicalArtist) as ?HudebnichUmelcu
							{
							?musicalArtist rdf:type <http://dbpedia.org/ontology/MusicalArtist>.
							?musicalArtist <http://dbpedia.org/ontology/style> ?label.
							?label rdfs:label ?styl.
							}
							ORDER BY DESC(?HudebnichUmelcu)
							LIMIT 50


">
</div>

<div id="sparql-hudebni-umelec7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?zeme COUNT(?musicalArtist) as ?HudebnichUmelcu
							{
							?musicalArtist rdf:type <http://dbpedia.org/ontology/MusicalArtist>.
							?musicalArtist <http://dbpedia.org/ontology/country> ?label.
							?label rdfs:label ?zeme.
							}
							ORDER BY DESC(?HudebnichUmelcu)
							LIMIT 50


">
</div>

<div id="sparql-hudebni-umelec8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniUmelec COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicalArtist>. 
							?resource rdfs:label ?HudebniUmelec.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hudebni-umelec9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniUmelec COUNT(?resource) AS ?InDegree
						    WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/MusicalArtist>. 
							?indegree rdfs:label ?HudebniUmelec.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL HUDEBNÍ UMĚLEC KONEC -------------------------->


<!----------SPARQL HUDEBNÍ ŽÁNR  -------------------------->
<div id="sparql-hudebni-zanr1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MusicGenre> .
							}
">

</div>
	   
<div id="sparql-hudebni-zanr2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MusicGenre> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-hudebni-zanr3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicGenre>. 
        }
">
</div>


<div id="sparql-hudebni-zanr4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MusicGenre>. 
							}


">
</div>

<div id="sparql-hudebni-zanr5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniZanr COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MusicGenre>. 
							?resource rdfs:label ?HudebniZanr.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-hudebni-zanr6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?HudebniZanr COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MusicGenre>. 
							  ?indegree rdfs:label ?HudebniZanr.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL HUDEBNÍ ŽÁNR KONEC-------------------------->

<!----------SPARQL CHEMICKÁ SLOUČENINA  -------------------------->
<div id="sparql-chemicka-sloucenina1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/ChemicalCompound> .
							}
">

</div>
	   
<div id="sparql-chemicka-sloucenina2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalCompound> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-chemicka-sloucenina3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalCompound>. 
        }
">
</div>


<div id="sparql-chemicka-sloucenina4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ChemicalCompound>. 
							}


">
</div>

<div id="sparql-chemicka-sloucenina5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChemickaSloucenina COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalCompound>. 
							?resource rdfs:label ?ChemickaSloucenina.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-chemicka-sloucenina6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChemickaSloucenina COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ChemicalCompound>. 
							  ?indegree rdfs:label ?ChemickaSloucenina.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL CHEMICKÁ SLOUČENINA KONEC-------------------------->


<!----------SPARQL CHEMICKÝ PRVEK  -------------------------->
<div id="sparql-chemicky-prvek1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalElement> .
							}
">

</div>
	   
<div id="sparql-chemicky-prvek2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalElement> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-chemicky-prvek3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalElement>. 
        }
">
</div>


<div id="sparql-chemicky-prvek4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ChemicalElement>. 
							}


">
</div>

<div id="sparql-chemicky-prvek5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChemickyPrvek COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ChemicalElement>. 
							?resource rdfs:label ?ChemickyPrvek.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-chemicky-prvek6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChemickyPrvek COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ChemicalElement>. 
							  ?indegree rdfs:label ?ChemickyPrvek.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL CHEMICKÝ PRVEK KONEC-------------------------->


<!----------SPARQL CHOROBA  -------------------------->
<div id="sparql-choroba1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Disease> .
							}
">

</div>
	   
<div id="sparql-choroba2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Disease> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-choroba3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Disease>. 
        }
">
</div>


<div id="sparql-choroba4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Disease>. 
							}


">
</div>

<div id="sparql-choroba5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?CHOROBA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Disease>. 
							?resource rdfs:label ?CHOROBA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-choroba6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?CHOROBA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Disease>. 
							  ?indegree rdfs:label ?CHOROBA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL CHOROBA KONEC-------------------------->



<!----------SPARQL CHRÁNĚNÉ ÚZEMÍ V ČESKU  -------------------------->
<div id="sparql-chranene-uzemi-v-cesku1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/ProtectedArea> .
							}
">

</div>
	   
<div id="sparql-chranene-uzemi-v-cesku2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/ProtectedArea> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-chranene-uzemi-v-cesku3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ProtectedArea>. 
        }
">
</div>


<div id="sparql-chranene-uzemi-v-cesku4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ProtectedArea>. 
							}


">
</div>

<div id="sparql-chranene-uzemi-v-cesku5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChraneneUzemiVCesku COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ProtectedArea>. 
							?resource rdfs:label ?ChraneneUzemiVCesku.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-chranene-uzemi-v-cesku6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ChraneneUzemiVCesku COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ProtectedArea>. 
							  ?indegree rdfs:label ?ChraneneUzemiVCesku.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL CHRÁNĚNÉ ÚZEMÍ V ČESKU KONEC-------------------------->



<!----------SPARQL JAZYK  -------------------------->
<div id="sparql-jazyk1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Language> .
							}
">

</div>
	   
<div id="sparql-jazyk2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Language> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-jazyk3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Language>. 
        }
">
</div>


<div id="sparql-jazyk4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Language>. 
							}


">
</div>

<div id="sparql-jazyk5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?JAZYK COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Language>. 
							?resource rdfs:label ?JAZYK.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-jazyk6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?JAZYK COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Language>. 
							  ?indegree rdfs:label ?JAZYK.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL JAZYK KONEC-------------------------->


<!----------SPARQL JEZERO  -------------------------->
<div id="sparql-jezero1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT count(distinct (?jmeno)) as ?ENTIT
							WHERE {
							?jmeno rdf:type <http://dbpedia.org/ontology/Lake>.
							?jmeno dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							}

">

</div>
	   
<div id="sparql-jezero2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(*) as ?TROJIC
							WHERE {
							?instance rdf:type <http://dbpedia.org/ontology/Lake>.
							?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							?instance ?p ?o
							}


">
</div>


<div id="sparql-jezero3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select count(?object) as ?OutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Lake>. 
							?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							}

">
</div>


<div id="sparql-jezero4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?odkaz) as ?Indegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Lake>.
							?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							}



">
</div>

<div id="sparql-jezero5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select ?ENTITA count(?object)as ?OutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/Lake>.
							?subject rdfs:label ?ENTITA.							
							?subject dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100

">
</div>


<div id="sparql-jezero6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?odkaz) as ?Indegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/Lake>.
							?instance dbpedia-owl:wikiPageWikiLink dbpedia-cs:Jezero.
							?instance rdfs:label ?ENTITA.
							}
							ORDER BY DESC(?Indegree)
							LIMIT 100

">
</div>
<!----------SPARQL JEZERO KONEC-------------------------->



<!----------SPARQL JMÉNO  -------------------------->
<div id="sparql-jmeno1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Name>.
							}
">

</div>
	   
<div id="sparql-jmeno2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Name> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-jmeno3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Name>. 
        }
">
</div>


<div id="sparql-jmeno4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Name>. 
							}


">
</div>

<div id="sparql-jmeno5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?JMENO COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Name>. 
							?resource rdfs:label ?JMENO.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-jmeno6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?JMENO COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Name>. 
							  ?indegree rdfs:label ?JMENO.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL JMÉNO KONEC-------------------------->


<!----------SPARQL KNIHA  -------------------------->
<div id="sparql-kniha1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Book> .
							}
">
</div>
	   
<div id="sparql-kniha2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                         { ?resource rdf:type <http://dbpedia.org/ontology/Book> .
                         ?resource ?p ?o.
                          }

">
</div>


<div id="sparql-kniha3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Book>. 
							}
">
</div>


<div id="sparql-kniha4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Book>. 
							}


">
</div>

<div id="sparql-kniha5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?PREKLADATEL COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/translator> ?label.
							?label rdfs:label ?PREKLADATEL.
							}
							ORDER BY DESC(?PocetKnih)



">	
</div>

<div id="sparql-kniha6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?AUTOR COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/author> ?label.
							?label rdfs:label ?AUTOR.
							}
							ORDER BY DESC(?PocetKnih)


">
</div>


<div id="sparql-kniha7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ILUSTRATOR COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/illustrator> ?label.
							?label rdfs:label ?ILUSTRATOR.
							}
							ORDER BY DESC(?PocetKnih)


">
</div>

<div id="sparql-kniha8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZEME COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/country> ?label.
							?label rdfs:label ?ZEME.
							}
							ORDER BY DESC(?PocetKnih)

">
</div>

<div id="sparql-kniha9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?JAZYK COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/originalLanguage> ?label.
							?label rdfs:label ?JAZYK.
							}
							ORDER BY DESC(?PocetKnih)


">
</div>

<div id="sparql-kniha10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/literaryGenre> ?label.
							?label rdfs:label ?ZANR.
							}
							ORDER BY DESC(?PocetKnih)


">
</div>

<div id="sparql-kniha11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?VYDAVATEL COUNT(?book) as ?PocetKnih
							{
							?book rdf:type <http://dbpedia.org/ontology/Book>.
							?book <http://dbpedia.org/ontology/publisher> ?label.
							?label rdfs:label ?VYDAVATEL.
							}
							ORDER BY DESC(?PocetKnih)


">
</div>

<div id="sparql-kniha12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?KNIHA ?PocetStranek
							{
							?resource rdf:type <http://dbpedia.org/ontology/Book>.
							?resource rdfs:label ?KNIHA.
							?resource <http://dbpedia.org/ontology/numberOfPages> ?PocetStranek.
							}
							ORDER BY DESC(?PocetStranek)


">
</div>

<div id="sparql-kniha13" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KNIHA COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Book>. 
							?resource rdfs:label ?KNIHA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-kniha14" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KNIHA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Book>. 
							?indegree rdfs:label ?KNIHA.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100
							


">
</div>
<!----------SPARQL KNIHA KONEC -------------------------->


<!----------SPARQL KOSMICKÁ LOĎ  -------------------------->
<div id="sparql-kosmicka-lod1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Spacecraft> .
							}
">

</div>
	   
<div id="sparql-kosmicka-lod2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Spacecraft> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-kosmicka-lod3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Spacecraft>. 
        }
">
</div>


<div id="sparql-kosmicka-lod4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Spacecraft>. 
							}


">
</div>

<div id="sparql-kosmicka-lod5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KosmickaLod COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Spacecraft>. 
							?resource rdfs:label ?KosmickaLod.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-kosmicka-lod6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KosmickaLod COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Spacecraft>. 
							  ?indegree rdfs:label ?KosmickaLod.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL KOSMICKÁ LOĎ KONEC-------------------------->


<!----------SPARQL KOSMONAUT  -------------------------->
<div id="sparql-kosmonaut1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Astronaut> .
							}
">

</div>
	   
<div id="sparql-kosmonaut2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Astronaut> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-kosmonaut3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Astronaut>. 
        }
">
</div>


<div id="sparql-kosmonaut4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Astronaut>. 
							}


">
</div>

<div id="sparql-kosmonaut5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KOSMONAUT COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Astronaut>. 
							?resource rdfs:label ?KOSMONAUT.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-kosmonaut6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KOSMONAUT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Astronaut>. 
							  ?indegree rdfs:label ?KOSMONAUT.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL KOSMONAUT KONEC-------------------------->


<!----------SPARQL KOSTEL  -------------------------->
<div id="sparql-kostel1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Church> .
							}
">

</div>
	   
<div id="sparql-kostel2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Church> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-kostel3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Church>. 
        }
">
</div>


<div id="sparql-kostel4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Church>. 
							}


">
</div>

<div id="sparql-kostel5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KOSTEL COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Church>. 
							?resource rdfs:label ?KOSTEL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-kostel6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KOSTEL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Church>. 
							  ?indegree rdfs:label ?KOSTEL.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL KOSTEL KONEC-------------------------->


<!----------SPARQL KRASOBRUSLAŘ  -------------------------->
<div id="sparql-krasobruslar1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/FigureSkater> .
							}
">

</div>
	   
<div id="sparql-krasobruslar2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/FigureSkater> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-krasobruslar3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FigureSkater>. 
        }
">
</div>


<div id="sparql-krasobruslar4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FigureSkater>. 
							}


">
</div>

<div id="sparql-krasobruslar5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KRASOBRUSLAR COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FigureSkater>. 
							?resource rdfs:label ?KRASOBRUSLAR.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-krasobruslar6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KRASOBRUSLAR COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FigureSkater>. 
							  ?indegree rdfs:label ?KRASOBRUSLAR.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL KRASOBRUSLAŘ KONEC-------------------------->



<!----------SPARQL KŘESŤANSKÝ VŮDCE  -------------------------->
<div id="sparql-krestansky-vudce1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Pope> .
							}
">

</div>
	   
<div id="sparql-krestansky-vudce2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Pope> .
                            ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-krestansky-vudce3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Pope>. 
        }
">
</div>


<div id="sparql-krestansky-vudce4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Pope>. 
							}


">
</div>

<div id="sparql-krestansky-vudce5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KrestanskyVudce COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Pope>. 
							?resource rdfs:label ?KrestanskyVudce.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-krestansky-vudce6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?KrestanskyVudce COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Pope>. 
							  ?indegree rdfs:label ?KrestanskyVudce.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL KŘESŤANSKÝ VŮDCE KONEC-------------------------->


<!----------SPARQL LETADLO  -------------------------->
<div id="sparql-letadlo1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Aircraft> .
							}
">

</div>
	   
<div id="sparql-letadlo2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Aircraft> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-letadlo3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Aircraft>. 
        }
">
</div>


<div id="sparql-letadlo4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Aircraft>. 
							}


">
</div>

<div id="sparql-letadlo5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LETADLO COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Aircraft>. 
							?resource rdfs:label ?LETADLO.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-letadlo6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LETADLO COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Aircraft>. 
							  ?indegree rdfs:label ?LETADLO.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL LETADLO KONEC-------------------------->



<!----------SPARQL LETECKÁ SPOLEČNOST  -------------------------->
<div id="sparql-letecka-spolecnost1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Airline> .
							}
">

</div>
	   
<div id="sparql-letecka-spolecnost2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Airline> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-letecka-spolecnost3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Airline>. 
        }
">
</div>


<div id="sparql-letecka-spolecnost4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Airline>. 
							}


">
</div>

<div id="sparql-letecka-spolecnost5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LeteckaSpolecnost COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Airline>. 
							?resource rdfs:label ?LeteckaSpolecnost.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-letecka-spolecnost6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LeteckaSpolecnost COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Airline>. 
							  ?indegree rdfs:label ?LeteckaSpolecnost.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL LETECKÁ SPOLEČNOST KONEC-------------------------->






<!----------SPARQL LETIŠTĚ  -------------------------->
<div id="sparql-letiste1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Airport> .
							}
">

</div>
	   
<div id="sparql-letiste2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Airport> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-letiste3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Airport>. 
        }
">
</div>


<div id="sparql-letiste4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Airport>. 
							}


">
</div>

<div id="sparql-letiste5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LETISTE COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Airport>. 
							?resource rdfs:label ?LETISTE.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-letiste6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LETISTE COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Airport>. 
							  ?indegree rdfs:label ?LETISTE.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL LETIŠTĚ KONEC-------------------------->


<!----------SPARQL LIGA LEDNÍHO HOKEJE  -------------------------->
<div id="sparql-liga-ledniho-hokeje1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/IceHockeyLeague>.
							}
">

</div>
	   
<div id="sparql-liga-ledniho-hokeje2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyLeague> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-liga-ledniho-hokeje3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyLeague>. 
        }
">
</div>


<div id="sparql-liga-ledniho-hokeje4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/IceHockeyLeague>. 
							}


">
</div>

<div id="sparql-liga-ledniho-hokeje5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LigaLednihoHokeje COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/IceHockeyLeague>. 
							?resource rdfs:label ?LigaLednihoHokeje.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-liga-ledniho-hokeje6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LigaLednihoHokeje COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/IceHockeyLeague>. 
							  ?indegree rdfs:label ?LigaLednihoHokeje.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL LIGA LEDNÍHO HOKEJE KONEC-------------------------->

<!----------SPARQL LYŽAŘ  -------------------------->
<div id="sparql-lyzar1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Skier> .
							}
">

</div>
	   
<div id="sparql-lyzar2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Skier> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-lyzar3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Skier>. 
        }
">
</div>


<div id="sparql-lyzar4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Skier>. 
							}


">
</div>

<div id="sparql-lyzar5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LYZAR COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Skier>. 
							?resource rdfs:label ?LYZAR.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-lyzar6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?LYZAR COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Skier>. 
							  ?indegree rdfs:label ?LYZAR.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL LYŽAŘ KONEC-------------------------->


<!----------SPARQL MĚNA  -------------------------->
<div id="sparql-mena1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Currency> .
							}
">

</div>
	   
<div id="sparql-mena2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Currency> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-mena3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Currency>. 
        }
">
</div>


<div id="sparql-mena4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Currency>. 
							}


">
</div>

<div id="sparql-mena5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MENA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Currency>. 
							?resource rdfs:label ?MENA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-mena6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MENA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Currency>. 
							  ?indegree rdfs:label ?MENA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MĚNA KONEC-------------------------->


<!----------SPARQL MINERÁL  -------------------------->
<div id="sparql-mineral1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Mineral> .
							}
">

</div>
	   
<div id="sparql-mineral2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Mineral> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-mineral3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Mineral>. 
        }
">
</div>


<div id="sparql-mineral4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Mineral>. 
							}


">
</div>

<div id="sparql-mineral5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MINERAL COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Mineral>. 
							?resource rdfs:label ?MINERAL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-mineral6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MINERAL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Mineral>. 
							  ?indegree rdfs:label ?MINERAL.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MINERÁL KONEC-------------------------->


<!----------SPARQL MOBILNÍ TELEFON  -------------------------->
<div id="sparql-mobilni-telefon1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MobilePhone> .
							}
">

</div>
	   
<div id="sparql-mobilni-telefon2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MobilePhone> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-mobilni-telefon3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MobilePhone>. 
        }
">
</div>


<div id="sparql-mobilni-telefon4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MobilePhone>. 
							}


">
</div>

<div id="sparql-mobilni-telefon5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MobilniTelefon COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MobilePhone>. 
							?resource rdfs:label ?MobilniTelefon.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-mobilni-telefon6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MobilniTelefon COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MobilePhone>. 
							  ?indegree rdfs:label ?MobilniTelefon.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MOBILNÍ TELEFON KONEC-------------------------->


<!----------SPARQL MODEL  -------------------------->
<div id="sparql-model1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Model> .
							}
">

</div>
	   
<div id="sparql-model2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Model> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-model3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Model>. 
        }
">
</div>


<div id="sparql-model4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Model>. 
							}


">
</div>

<div id="sparql-model5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MODEL COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Model>. 
							?resource rdfs:label ?MODEL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-model6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MODEL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Model>. 
							  ?indegree rdfs:label ?MODEL.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MODEL KONEC-------------------------->


<!----------SPARQL MOTOCYKL  -------------------------->
<div id="sparql-motocykl1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Motorcycle> .
							}
">

</div>
	   
<div id="sparql-motocykl2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Motorcycle> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-motocykl3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Motorcycle>. 
        }
">
</div>


<div id="sparql-motocykl4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Motorcycle>. 
							}


">
</div>

<div id="sparql-motocykl5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MOTOCYKL COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Motorcycle>. 
							?resource rdfs:label ?MOTOCYKL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-motocykl6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MOTOCYKL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Motorcycle>. 
							  ?indegree rdfs:label ?MOTOCYKL.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MOTOCYKL KONEC-------------------------->


<!----------SPARQL MOŘE  -------------------------->
<div id="sparql-more1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Sea> .
							}
">

</div>
	   
<div id="sparql-more2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Sea> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-more3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Sea>. 
        }
">
</div>


<div id="sparql-more4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Sea>. 
							}


">
</div>

<div id="sparql-more5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MORE COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Sea>. 
							?resource rdfs:label ?MORE.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-more6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MORE COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Sea>. 
							  ?indegree rdfs:label ?MORE.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MOŘE KONEC-------------------------->


<!----------SPARQL MRAKODRAP  -------------------------->
<div id="sparql-mrakodrap1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Skyscraper> .
							}
">

</div>
	   
<div id="sparql-mrakodrap2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Skyscraper> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-mrakodrap3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Skyscraper>. 
        }
">
</div>


<div id="sparql-mrakodrap4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Skyscraper>. 
							}


">
</div>

<div id="sparql-mrakodrap5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MRAKODRAP COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Skyscraper>. 
							?resource rdfs:label ?MRAKODRAP.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-mrakodrap6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MRAKODRAP COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Skyscraper>. 
							  ?indegree rdfs:label ?MRAKODRAP.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MRAKODRAP KONEC-------------------------->



<!----------SPARQL MUZEUM  -------------------------->
<div id="sparql-muzeum1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Museum> .
							}
">

</div>
	   
<div id="sparql-muzeum2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Museum> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-muzeum3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Museum>. 
        }
">
</div>


<div id="sparql-muzeum4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Museum>. 
							}


">
</div>

<div id="sparql-muzeum5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MUZEUM COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Museum>. 
							?resource rdfs:label ?MUZEUM.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-muzeum6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MUZEUM COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Museum>. 
							  ?indegree rdfs:label ?MUZEUM.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MUZEUM KONEC-------------------------->


<!----------SPARQL MS V HOKEJI  -------------------------->
<div id="sparql-ms-v-hokeji1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT (count(distinct ?jmeno ) as ?ENTITY)
							WHERE {
							?jmeno rdf:type <http://dbpedia.org/ontology/SportsEvent>.
							FILTER( contains(str(?jmeno ), 'hokej') )
							FILTER( contains(str(?jmeno ), 'Mistr') )
}

">

</div>
	   
<div id="sparql-ms-v-hokeji2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(*) as ?TROJICE
							WHERE {
							?instance rdf:type <http://dbpedia.org/ontology/SportsEvent>.
							FILTER( contains(str(?instance ), 'hokej') )
							FILTER( contains(str(?instance ), 'Mistr') )
							?instance ?p ?o
							}


">
</div>


<div id="sparql-ms-v-hokeji3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select count(?object) as ?OutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/SportsEvent>. 
							FILTER( contains(str(?subject), 'hokej') )
							FILTER( contains(str(?subject), 'Mistr') )
							}

">
</div>


<div id="sparql-ms-v-hokeji4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT Count(?odkaz) as ?InDegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/SportsEvent>.
							FILTER( contains(str(?instance ), 'hokej') )
							FILTER( contains(str(?instance ), 'Mistr') )
							}
">
</div>

<div id="sparql-ms-v-hokeji5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="Select ?ENTITA count(?object) as ?EntityOutDegree
							{ 
							?subject dbpedia-owl:wikiPageWikiLink ?object. 
							?subject rdf:type <http://dbpedia.org/ontology/SportsEvent>. 
							?subject rdfs:label ?ENTITA.
							FILTER( contains(str(?subject), 'hokej') )
							FILTER( contains(str(?subject), 'Mistr') )
							}
							ORDER BY DESC(?EntityOutDegree)
							LIMIT 100
">
</div>


<div id="sparql-ms-v-hokeji6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ENTITA Count(?odkaz) as ?EntityInDegree
							WHERE {
							?odkaz dbpedia-owl:wikiPageWikiLink ?instance.
							?instance rdf:type <http://dbpedia.org/ontology/SportsEvent>.
							?instance rdfs:label ?ENTITA.
							FILTER( contains(str(?instance ), 'hokej') )
							FILTER( contains(str(?instance ), 'Mistr') )
							}
							ORDER BY DESC(?EntityInDegree)
							LIMIT 100

">
</div>
<!----------SPARQL MS V HOKEJI KONEC-------------------------->


<!----------SPARQL NOVINY  -------------------------->
<div id="sparql-noviny1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Newspaper> .
							}
">

</div>
	   
<div id="sparql-noviny2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Newspaper> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-noviny3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Newspaper>. 
        }
">
</div>


<div id="sparql-noviny4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Newspaper>. 
							}


">
</div>

<div id="sparql-noviny5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?NOVINY COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Newspaper>. 
							?resource rdfs:label ?NOVINY.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-noviny6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?NOVINY COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Newspaper>. 
							  ?indegree rdfs:label ?NOVINY.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL NOVINY KONEC-------------------------->


<!----------SPARQL OKRES  -------------------------->
<div id="sparql-okres1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/District> .
							}
">

</div>
	   
<div id="sparql-okres2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/District> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-okres3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/District>. 
        }
">
</div>


<div id="sparql-okres4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/District>. 
							}


">
</div>

<div id="sparql-okres5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OKRES COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/District>. 
							?resource rdfs:label ?OKRES.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-okres6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OKRES COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/District>. 
							  ?indegree rdfs:label ?OKRES.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL OKRES KONEC-------------------------->


<!----------SPARQL ORGANIZACE  -------------------------->
<div id="sparql-organizace1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Organisation> .
							}
">

</div>
	   
<div id="sparql-organizace2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Organisation> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-organizace3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Organisation>. 
        }
">
</div>


<div id="sparql-organizace4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Organisation>. 
							}


">
</div>

<div id="sparql-organizace5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ORGANIZACE COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Organisation>. 
							?resource rdfs:label ?ORGANIZACE.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-organizace6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ORGANIZACE COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Organisation>. 
							  ?indegree rdfs:label ?ORGANIZACE.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ORGANIZACE KONEC-------------------------->


<!----------SPARQL OSOBA  -------------------------->

 <div id="sparql-osoba1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Person> .
							}
">
</div>
	   
<div id="sparql-osoba2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Person>.
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-osoba3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Person>. 
							}
">
</div>


<div id="sparql-osoba4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Person>. 
							}	


">
</div>

<div id="sparql-osoba5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZEME COUNT(DISTINCT(?person)) as ?PocetOsob
							{
							?person rdf:type <http://dbpedia.org/ontology/Person>.
							?person <http://dbpedia.org/ontology/country> ?label.
							?label rdfs:label ?ZEME.
							}
							ORDER BY DESC(?PocetOsob)



">	
</div>

<div id="sparql-osoba6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?POVOLANI COUNT(?person) as ?PocetOsob
							{
							?person rdf:type <http://dbpedia.org/ontology/Person>.
							?person <http://dbpedia.org/ontology/occupation> ?label.
							?label rdfs:label ?POVOLANI.

							}
							ORDER BY DESC(?PocetOsob)
							LIMIT 50



">
</div>


<div id="sparql-osoba7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?UNIVERZITA COUNT(?person) as ?PocetOsob
								{
								?person rdf:type <http://dbpedia.org/ontology/Person>.
								?person <http://dbpedia.org/ontology/almaMater> ?label.
								?label rdfs:label ?UNIVERZITA.
								}
								ORDER BY DESC(?PocetOsob)
								LIMIT 10

">
</div>

<div id="sparql-osoba8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?MistoNrozeni COUNT(?person) as ?PocetOsob
							{
							?person rdf:type <http://dbpedia.org/ontology/Person>.
							?person <http://dbpedia.org/ontology/birthPlace> ?label.
							?label rdfs:label ?MistoNrozeni.
							}
							ORDER BY DESC(?PocetOsob)
							LIMIT 50


">
</div>

<div id="sparql-osoba9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSOBA ?VYSKA
							{
							?person rdf:type <http://dbpedia.org/ontology/Person>.
							?person rdfs:label ?OSOBA.
							?person <http://dbpedia.org/ontology/height> ?VYSKA.
							}
							ORDER BY DESC(?VYSKA)
							LIMIT 100

">
</div>

<div id="sparql-osoba10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSOBA ?VAHA
							{
							?person rdf:type <http://dbpedia.org/ontology/Person>.
							?person rdfs:label ?OSOBA.
							?person <http://dbpedia.org/ontology/weight> ?VAHA.
							}
							ORDER BY DESC(?VAHA)
							LIMIT 100

">
</div>

<div id="sparql-osoba11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSOBA COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Person>. 
							?resource rdfs:label ?OSOBA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-osoba12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSOBA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Person>. 
							?indegree rdfs:label ?OSOBA.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL OSOBA KONEC -------------------------->


<!----------SPARQL OSTROV  -------------------------->
<div id="sparql-ostrov1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Island> .
							}
">

</div>
	   
<div id="sparql-ostrov2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Island> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-ostrov3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Island>. 
        }
">
</div>


<div id="sparql-ostrov4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Island>. 
							}


">
</div>

<div id="sparql-ostrov5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSTROV COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Island>. 
							?resource rdfs:label ?OSTROV.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-ostrov6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?OSTROV COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Island>. 
							  ?indegree rdfs:label ?OSTROV.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL OSTROV KONEC-------------------------->

<!----------SPARQL POANOVNÍK  -------------------------->

<div id="sparql-panovnik1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Monarch> .
							}
">
</div>
	   
<div id="sparql-panovnik2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Monarch>.
							?resource ?p ?o.
                          }

">
</div>


<div id="sparql-panovnik3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Monarch>. 
							}
">
</div>


<div id="sparql-panovnik4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Monarch>. 
							}	


">
</div>

<div id="sparql-panovnik5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?DYNASTIE COUNT(?monarch) as ?PocetPanovniku
							{
							?monarch rdf:type <http://dbpedia.org/ontology/Monarch>.
							?monarch foaf:familyName ?DYNASTIE.
							}
							ORDER BY DESC(?PocetPanovniku)

">	
</div>

<div id="sparql-panovnik6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PANOVNIK COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Monarch>. 
							?resource rdfs:label ?PANOVNIK.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-panovnik7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PANOVNIK COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Monarch>. 
							?indegree rdfs:label ?PANOVNIK.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>


<!----------SPARQL POANOVNÍK KONEC -------------------------->


<!----------SPARQL PILOT F1  -------------------------->
<div id="sparql-pilot-f11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Colour> .
							}
">

</div>
	   
<div id="sparql-pilot-f12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/FormulaOneRacer> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-pilot-f13" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FormulaOneRacer>. 
        }
">
</div>


<div id="sparql-pilot-f14" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FormulaOneRacer>. 
							}


">
</div>

<div id="sparql-pilot-f15" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PilotFormule1 COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/FormulaOneRacer>. 
							?resource rdfs:label ?PilotFormule1.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-pilot-f16" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PilotFormule1 COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/FormulaOneRacer>. 
							  ?indegree rdfs:label ?PilotFormule1.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL PILOT F1 KONEC-------------------------->

<!----------SPARQL PIVOVAR  -------------------------->
<div id="sparql-pivovar1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Brewery> .
							}
">

</div>
	   
<div id="sparql-pivovar2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Brewery> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-pivovar3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Brewery>. 
        }
">
</div>


<div id="sparql-pivovar4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Brewery>. 
							}


">
</div>

<div id="sparql-pivovar5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PIVOVAR COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Brewery>. 
							?resource rdfs:label ?PIVOVAR.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-pivovar6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PIVOVAR COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Brewery>. 
							  ?indegree rdfs:label ?PIVOVAR.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL PIVOVAR KONEC-------------------------->

<!----------SPARQL PLANETA  -------------------------->
<div id="sparql-planeta1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Planet> .
							}
">

</div>
	   
<div id="sparql-planeta2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Planet>.
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-planeta3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Planet>. 
        }
">
</div>


<div id="sparql-planeta4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Planet>. 
							}


">
</div>

<div id="sparql-planeta5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PLANETA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Planet>. 
							?resource rdfs:label ?PLANETA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-planeta6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PLANETA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Planet>. 
							  ?indegree rdfs:label ?PLANETA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL PLANETA KONEC-------------------------->




<!----------SPARQL POLITIK  -------------------------->

<div id="sparql-politik1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Politician> .
							}
">
</div>
	   
<div id="sparql-politik2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                         { ?resource rdf:type <http://dbpedia.org/ontology/Politician>.
                         ?resource ?p ?o.
                          }

">
</div>


<div id="sparql-politik3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Politician>. 
							}
">
</div>


<div id="sparql-politik4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Politician>. 
							}	


">
</div>

<div id="sparql-politik5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?UNIVERZITA COUNT(?politician ) as ?PocetPolitiku
							{
							?politician rdf:type <http://dbpedia.org/ontology/Politician>.
							?politician <http://dbpedia.org/ontology/almaMater> ?almaMater.
							?almaMater rdfs:label ?UNIVERZITA.
							}
							ORDER BY DESC(?PocetPolitiku)


">	
</div>

<div id="sparql-politik6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?PolitickaStrana COUNT(?politician ) as ?PocetPolitiku
							{
							?politician rdf:type <http://dbpedia.org/ontology/Politician>.
							?politician <http://dbpedia.org/ontology/party> ?label.
							?label rdfs:label ?PolitickaStrana.
							}
							ORDER BY DESC(?PocetPolitiku)


">	
</div>

<div id="sparql-politik7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?NARODNOST COUNT(?politician ) as ?PocetPolitiku
							{
							?politician rdf:type <http://dbpedia.org/ontology/Politician>.
							?politician <http://dbpedia.org/ontology/nationality> ?nationality.
							?nationality rdfs:label ?NARODNOST.
							}
							ORDER BY DESC(?PocetPolitiku)


">	
</div>

<div id="sparql-politik8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?FUNKCE COUNT(?politician ) as ?PocetPolitiku
							{
							?politician rdf:type <http://dbpedia.org/ontology/Politician>.
							?politician <http://dbpedia.org/ontology/politicalFunction> ?FUNKCE.

							}
							ORDER BY DESC(?PocetPolitiku)


">	
</div>

<div id="sparql-politik9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?POLITIK COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Politician>. 
							?resource rdfs:label ?POLITIK.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-politik10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?POLITIK COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Politician>. 
							?indegree rdfs:label ?POLITIK.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL POLITIK KONEC -------------------------->

<!----------SPARQL POLITICKA STRANA  -------------------------->

<div id="sparql-politicka-strana1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/PoliticalParty> .
							}
">
</div>
	   
<div id="sparql-politicka-strana2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 	
							?resource rdf:type <http://dbpedia.org/ontology/PoliticalParty>.
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-politicka-strana3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/PoliticalParty>. 
							}
">
</div>


<div id="sparql-politicka-strana4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/PoliticalParty>. 
							}	


">
</div>



<div id="sparql-politicka-strana5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SIDLO COUNT(?politicalparty) as ?PocetPolitickychStran
							{
							?politicalparty rdf:type <http://dbpedia.org/ontology/PoliticalParty>.
							?politicalparty  <http://dbpedia.org/ontology/headquarter> ?o.
							?o rdfs:label ?SIDLO.
							}
							ORDER BY DESC(?PocetPolitickychStran)




">	
</div>

<div id="sparql-politicka-strana6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?IDEOLOGIE COUNT(?politicalparty) as ?PocetPolitickychStran
							{
							?politicalparty rdf:type <http://dbpedia.org/ontology/PoliticalParty>.
							?politicalparty  <http://dbpedia.org/ontology/ideology> ?o.
							?o rdfs:label ?IDEOLOGIE.
							}
							ORDER BY DESC(?PocetPolitickychStran)

">	
</div>

<div id="sparql-politicka-strana7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PolitickaStrana COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/PoliticalParty>. 
							?resource rdfs:label ?PolitickaStrana.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-politicka-strana8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?PolitickaStrana COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/PoliticalParty>. 
							?indegree rdfs:label ?PolitickaStrana.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL POLITICKA STRANA KONEC -------------------------->

<!----------SPARQL PROGRAMOVACÍ JAZYK  -------------------------->
<div id="sparql-programovaci-jazyk1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage> .
							}
">

</div>
	   
<div id="sparql-programovaci-jazyk2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-programovaci-jazyk3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage>. 
        }
">
</div>


<div id="sparql-programovaci-jazyk4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage>. 
							}


">
</div>

<div id="sparql-programovaci-jazyk5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ProgramovaciJazyk COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage>. 
							?resource rdfs:label ?ProgramovaciJazyk.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-programovaci-jazyk6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ProgramovaciJazyk COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/ProgrammingLanguage>. 
							  ?indegree rdfs:label ?ProgramovaciJazyk.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL PROGRAMOVACÍ JAZYK KONEC-------------------------->

<!----------SPARQL REGION  -------------------------->

<div id="sparql-region1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Region> .
							}
">
</div>
	   
<div id="sparql-region2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                         { ?resource rdf:type <http://dbpedia.org/ontology/Region>.
                         ?resource ?p ?o.
                          }

">
</div>


<div id="sparql-region3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Region>. 
							}
">
</div>


<div id="sparql-region4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Region>. 
							}	


">
</div>

<div id="sparql-region5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?REGION ?ROZLOHA
							{
							?resource rdf:type <http://dbpedia.org/ontology/Region>.
							?resource <http://dbpedia.org/ontology/areaTotal> ?ROZLOHA.
							?resource rdfs:label ?REGION.
							}
							ORDER BY DESC(?ROZLOHA)



">	
</div>

<div id="sparql-region6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?REGION ?PocetObyvatel
								{
								?resource rdf:type <http://dbpedia.org/ontology/Region>.
								?resource <http://dbpedia.org/ontology/populationTotal> ?PocetObyvatel.
								?resource rdfs:label ?REGION.
								}
								ORDER BY DESC(?PocetObyvatel)

">	
</div>

<div id="sparql-region7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?REGION ?HustotaZalidneni
							{
							?resource rdf:type <http://dbpedia.org/ontology/Region>.
							?resource <http://dbpedia.org/ontology/populationDensity> ?HustotaZalidneni.
							?resource rdfs:label ?REGION.
							}
							ORDER BY DESC(?HustotaZalidneni)


">	
</div>

<div id="sparql-region8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?REGION ?NejvyssiHora
							{
							?resource rdf:type <http://dbpedia.org/ontology/Region>.
							?resource <http://dbpedia.org/ontology/highestMountain> ?o.
							?o rdfs:label ?NejvyssiHora.
							?resource rdfs:label ?REGION.
							}
							ORDER BY DESC(?NejvyssiHora)



">	
</div>


<div id="sparql-region9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?NABOZENSTVI COUNT(?region) as ?PocetRegionu
							{
							?region rdf:type <http://dbpedia.org/ontology/Region>.
							?region <http://dbpedia.org/ontology/religion> ?religion.
							?religion rdfs:label ?NABOZENSTVI.
							}
							ORDER BY DESC(?PocetRegionu)



">	
</div>

<div id="sparql-region10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?JAZYK COUNT(?region) as ?PocetRegionu
							{
							?region rdf:type <http://dbpedia.org/ontology/Region>.
							?region <http://dbpedia.org/ontology/regionalLanguage> ?regionalLanguage.
							?regionalLanguage rdfs:label ?JAZYK.
							}
							ORDER BY DESC(?PocetRegionu)
">	
</div>

<div id="sparql-region11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?REGION COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Region>. 
							?resource rdfs:label ?REGION.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-region12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?REGION COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Region>. 
							?indegree rdfs:label ?REGION.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>


<!----------SPARQL REGION KONEC -------------------------->


<!----------SPARQL REŽISÉR  -------------------------->
<div id="sparql-reziser1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/MovieDirector> .
							}
">

</div>
	   
<div id="sparql-reziser2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MovieDirector> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-reziser3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MovieDirector>. 
        }
">
</div>


<div id="sparql-reziser4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MovieDirector>. 
							}


">
</div>

<div id="sparql-reziser5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?REZISER COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MovieDirector>. 
							?resource rdfs:label ?REZISER.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-reziser6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?REZISER COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MovieDirector>. 
							  ?indegree rdfs:label ?REZISER.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL REŽISÉR KONEC-------------------------->

<!----------SPARQL RYCHLOBRUSLAŘ  -------------------------->
<div id="sparql-rychlobruslar1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/SpeedSkater> .
							}
">

</div>
	   
<div id="sparql-rychlobruslar2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/SpeedSkater> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-rychlobruslar3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SpeedSkater>. 
        }
">
</div>


<div id="sparql-rychlobruslar4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SpeedSkater>. 
							}


">
</div>

<div id="sparql-rychlobruslar5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?RYCHLOBRUSLAR COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/SpeedSkater>. 
							?resource rdfs:label ?RYCHLOBRUSLAR.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-rychlobruslar6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?RYCHLOBRUSLAR COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/SpeedSkater>. 
							  ?indegree rdfs:label ?RYCHLOBRUSLAR.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL RYCHLOBRUSLAŘ KONEC-------------------------->

<!----------SPARQL SÍDLO  -------------------------->

<div id="sparql-sidlo1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Settlement> .
							}
">
</div>
	   
<div id="sparql-sidlo2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                         { ?resource rdf:type <http://dbpedia.org/ontology/Settlement>.
                         ?resource ?p ?o.
                          }

">
</div>


<div id="sparql-sidlo3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Settlement>. 
							}
">
</div>


<div id="sparql-sidlo4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Settlement>. 
							}	


">
</div>

<div id="sparql-sidlo5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZEME COUNT(?settlement) as ?PocetSidel
							{
							?settlement rdf:type <http://dbpedia.org/ontology/Settlement>.
							?settlement <http://dbpedia.org/ontology/country> ?country.
							?country rdfs:label ?ZEME.
							}
							ORDER BY DESC(?PocetSidel)
							LIMIT 50

">	
</div>

<div id="sparql-sidlo6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SIDLO ?CelkovaRozloha
							{
							?settlement rdf:type <http://dbpedia.org/ontology/Settlement>.
							?settlement <http://dbpedia.org/ontology/areaTotal> ?CelkovaRozloha.
							?settlement rdfs:label ?SIDLO.
							}
							ORDER BY DESC(?CelkovaRozloha)

">	
</div>

<div id="sparql-sidlo7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SIDLO ?CelkovaPopulace
							{
							?settlement rdf:type <http://dbpedia.org/ontology/Settlement>.
							?settlement <http://dbpedia.org/ontology/populationTotal> ?CelkovaPopulace.
							?settlement rdfs:label ?SIDLO.
							}
							ORDER BY DESC(?CelkovaPopulace)
							LIMIT 100

">	
</div>

<div id="sparql-sidlo8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SIDLO ?NadmorskaVyska
							{
							?settlement rdf:type <http://dbpedia.org/ontology/Settlement>.
							?settlement <http://dbpedia.org/ontology/elevation> ?NadmorskaVyska.
							?settlement rdfs:label ?SIDLO.
							}
							ORDER BY DESC(?NadmorskaVyska)
							LIMIT 100
">	
</div>

<div id="sparql-sidlo9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SIDLO COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Settlement>. 
							?resource rdfs:label ?SIDLO.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-sidlo10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SIDLO COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Settlement>. 
							?indegree rdfs:label ?SIDLO.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL SÍDLO KONEC -------------------------->

<!----------SPARQL SÍDLO SVĚTA  -------------------------->
<div id="sparql-sidlo-sveta1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/City> .
							}
">

</div>
	   
<div id="sparql-sidlo-sveta2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/City> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-sidlo-sveta3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/City>. 
        }
">
</div>


<div id="sparql-sidlo-sveta4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/City>. 
							}


">
</div>

<div id="sparql-sidlo-sveta5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SidloSveta COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/City>. 
							?resource rdfs:label ?SidloSveta.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-sidlo-sveta6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SidloSveta COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/City>. 
							  ?indegree rdfs:label ?SidloSveta.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SÍDLO SVĚTA KONEC-------------------------->


<!----------SPARQL SINGL  -------------------------->

<div id="sparql-singl1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Single> .
							}
">
</div>
	   
<div id="sparql-singl2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Single>.
							?resource ?p ?o.
							}

">
</div>


<div id="sparql-singl3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Single>. 
							}
">
</div>


<div id="sparql-singl4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Single>. 
							}	


">
</div>

<div id="sparql-singl5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?single) as ?PocetSinglu
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/musicType> ?musicType.
							?musicType rdfs:label ?ZANR.
							}
							ORDER BY DESC(?PocetSinglu)


">	
</div>

<div id="sparql-singl6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?AUTOR COUNT(?single) as ?PocetSinglu
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/author> ?author.
							?author rdfs:label ?AUTOR.
							}
							ORDER BY DESC(?PocetSinglu)


">	
</div>

<div id="sparql-singl7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?UMELEC COUNT(?single) as ?PocetSinglu
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/artist> ?artist.
							?artist rdfs:label ?UMELEC.
							}
							ORDER BY DESC(?PocetSinglu)

">	
</div>

<div id="sparql-singl8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?PRODUCENT COUNT(?single) as ?PocetSinglu
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/producer> ?producer.
							?producer rdfs:label ?PRODUCENT.
							}
							ORDER BY DESC(?PocetSinglu)

">	
</div>

<div id="sparql-singl9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?publisher COUNT(?single) as ?PocetSinglu
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single dc:publisher ?publisher.
							}
							ORDER BY DESC(?PocetSinglu)


">	
</div>

<div id="sparql-singl10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SINGL ?DELKA
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/runtime> ?DELKA.
							?single rdfs:label ?SINGL.
							}
							ORDER BY DESC(?DELKA)
">	
</div>

<div id="sparql-singl11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SINGL ?RANK
							{
							?single rdf:type <http://dbpedia.org/ontology/Single>.
							?single <http://dbpedia.org/ontology/rank> ?RANK.
							?single rdfs:label ?SINGL.
							}
							ORDER BY DESC(?RANK)


">	
</div>

<div id="sparql-singl12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SINGL COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Single>. 
							?resource rdfs:label ?SINGL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-singl13" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SINGL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Single>. 
							?indegree rdfs:label ?SINGL.
							}	
							ORDER BY DESC(?InDegree)
							LIMIT 100


">
</div>

<!----------SPARQL SINGL KONEC -------------------------->


<!----------SPARQL SKLADBA  -------------------------->
<div id="sparql-skladba1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Song> .
							}
">

</div>
	   
<div id="sparql-skladba2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Song> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-skladba3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Song>. 
        }
">
</div>


<div id="sparql-skladba4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Song>. 
							}


">
</div>

<div id="sparql-skladba5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SKLADBA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Song>. 
							?resource rdfs:label ?SKLADBA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-skladba6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SKLADBA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Song>. 
							  ?indegree rdfs:label ?SKLADBA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SKLADBA KONEC-------------------------->

<!----------SPARQL SOFTWARE  -------------------------->
<div id="sparql-software1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Software> .
							}
">

</div>
	   
<div id="sparql-software2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Software> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-software3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Software>. 
        }
">
</div>


<div id="sparql-software4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Software>. 
							}


">
</div>

<div id="sparql-software5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SOFTWARE COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Software>. 
							?resource rdfs:label ?SOFTWARE.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-software6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SOFTWARE COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Software>. 
							  ?indegree rdfs:label ?SOFTWARE.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SOFTWARE KONEC-------------------------->

<!----------SPARQL SPISOVATEL  -------------------------->

<div id="sparql-spisovatel1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Writer> .
							}

">
</div>
	   
<div id="sparql-spisovatel2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Writer> .
							?resource ?p ?o.
							}


">
</div>


<div id="sparql-spisovatel3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							  ?resource rdf:type <http://dbpedia.org/ontology/Writer>. 
							}

">
</div>


<div id="sparql-spisovatel4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Writer>. 
							}

">
</div>

<div id="sparql-spisovatel5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?NARODNOST COUNT(?writer ) as ?ENTIT

							{
							?writer rdf:type <http://dbpedia.org/ontology/Writer>.
							?writer <http://dbpedia.org/ontology/nationality> ?nationality.
							?nationality rdfs:label ?NARODNOST.
							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-spisovatel6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?VZDELANI COUNT(?writer ) as ?ENTIT
								{
								?writer rdf:type <http://dbpedia.org/ontology/Writer>.
								?writer <http://dbpedia.org/ontology/education> ?education.
								?education rdfs:label ?VZDELANI.
								}
								ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-spisovatel7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?album ) as ?ENTIT
								{
								?album rdf:type <http://dbpedia.org/ontology/Writer>.
								?album <http://dbpedia.org/ontology/genre> ?genre .
								?genre rdfs:label ?ZANR.
								}
								ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-spisovatel8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SKOLA COUNT(?writer) as ?ENTIT

							{
							?writer rdf:type <http://dbpedia.org/ontology/Writer>.
							?writer <http://dbpedia.org/ontology/almaMater> ?almaMater.
							?almaMater rdfs:label ?SKOLA.
							}
							ORDER BY DESC(?ENTIT)


">
</div>

<div id="sparql-spisovatel9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPISOVATEL COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Writer>. 
							?resource rdfs:label ?SPISOVATEL.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100

">
</div>


<div id="sparql-spisovatel10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPISOVATEL COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/Writer>. 
							?indegree rdfs:label ?SPISOVATEL.
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL SPISOVATEL KONEC -------------------------->

<!----------SPARQL SPORTOVEC  -------------------------->

 <div id="sparql-sportovec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Athlete> .
							}
">
</div>
	   
<div id="sparql-sportovec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							 { ?resource rdf:type <http://dbpedia.org/ontology/Athlete>.
							 ?resource ?p ?o.
							  }

">
</div>


<div id="sparql-sportovec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
								  ?resource rdf:type <http://dbpedia.org/ontology/Athlete>. 
								}
">
</div>


<div id="sparql-sportovec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
								  ?indegree rdf:type <http://dbpedia.org/ontology/Athlete>. 
								}	


">
</div>

<div id="sparql-sportovec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?OBCANSTVI COUNT(?athlete) as ?PocetSportovcu
							{
							?athlete rdf:type <http://dbpedia.org/ontology/Athlete>.
							?athlete <http://dbpedia.org/ontology/nationality> ?nationality.
							?nationality rdfs:label ?OBCANSTVI.
							}
							ORDER BY DESC(?PocetSportovcu)
">	
</div>

<div id="sparql-sportovec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SPORT COUNT(?athlete) as ?PocetSportovcu
							{
							?athlete rdf:type <http://dbpedia.org/ontology/Athlete>.
							?athlete <http://dbpedia.org/ontology/sport> ?label.
							?label rdfs:label ?SPORT.
							}
							ORDER BY DESC(?PocetSportovcu)
">	
</div>

<div id="sparql-sportovec7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?AtletickaDisciplina COUNT(?athlete) as ?PocetSportovcu
							{
							?athlete rdf:type <http://dbpedia.org/ontology/Athlete>.
							?athlete <http://dbpedia.org/ontology/athleticsDiscipline> ?athleticsDiscipline.
							?athleticsDiscipline rdfs:label ?AtletickaDisciplina.
							}
							ORDER BY DESC(?PocetSportovcu)

">	
</div>

<div id="sparql-sportovec8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SPORTOVEC ?VYSKA
							{
							?athlete rdf:type <http://dbpedia.org/ontology/Athlete>.
							?athlete <http://dbpedia.org/ontology/height> ?VYSKA.
							?athlete rdfs:label ?SPORTOVEC.
							}
							ORDER BY DESC(?VYSKA)

">	
</div>

<div id="sparql-sportovec9" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?SPORTOVEC ?VAHA
							{
							?athlete rdf:type <http://dbpedia.org/ontology/Athlete>.
							?athlete <http://dbpedia.org/ontology/weight> ?VAHA.
							?athlete rdfs:label ?SPORTOVEC.
							}
							ORDER BY DESC(?VAHA)

">	
</div>

<div id="sparql-sportovec10" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPORTOVEC COUNT(?resource) AS ?OutDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
								  ?resource rdf:type <http://dbpedia.org/ontology/Athlete>. 
								  ?resource rdfs:label ?SPORTOVEC.
								}
								ORDER BY DESC(?OutDegree)
								LIMIT 100
">
</div>


<div id="sparql-sportovec11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPORTOVEC COUNT(?resource) AS ?InDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
								  ?indegree rdf:type <http://dbpedia.org/ontology/Athlete>. 
								  ?indegree rdfs:label ?SPORTOVEC.
								}	
								ORDER BY DESC(?InDegree)
								LIMIT 100

">
</div>

<!----------SPARQL SPORTOVEC KONEC -------------------------->

<!----------SPARQL SPORTOVNÍ DISCIPLÍNA  -------------------------->
<div id="sparql-sportovni-disciplina1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Sport> .
							}
">

</div>
	   
<div id="sparql-sportovni-disciplina2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Sport> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-sportovni-disciplina3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Sport>. 
        }
">
</div>


<div id="sparql-sportovni-disciplina4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Sport>. 
							}


">
</div>

<div id="sparql-sportovni-disciplina5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPORT COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Sport>. 
							?resource rdfs:label ?SPORT.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-sportovni-disciplina6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SPORT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Sport>. 
							  ?indegree rdfs:label ?SPORT.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SPORTOVNÍ DISCIPLÍNA KONEC-------------------------->

<!----------SPARQL STADION  -------------------------->
<div id="sparql-stadion1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Stadium> .
							}
">

</div>
	   
<div id="sparql-stadion2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Stadium> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-stadion3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Stadium>. 
							}
">
</div>


<div id="sparql-stadion4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Stadium>. 
							}


">
</div>

<div id="sparql-stadion5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STADION COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Stadium>. 
							?resource rdfs:label ?STADION.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-stadion6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STADION COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Stadium>. 
							  ?indegree rdfs:label ?STADION.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL STADION KONEC-------------------------->

<!----------SPARQL STROMY  -------------------------->
<div id="sparql-stromy1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Plant> .
							}
">

</div>
	   
<div id="sparql-stromy2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Plant> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-stromy3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Plant>. 
        }
">
</div>


<div id="sparql-stromy4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Plant>. 
							}


">
</div>

<div id="sparql-stromy5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STROMY COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Plant>. 
							?resource rdfs:label ?STROMY.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-stromy6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STROMY COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Plant>. 
							  ?indegree rdfs:label ?STROMY.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL STROMY KONEC-------------------------->

<!----------SPARQL STÁT  -------------------------->
<div id="sparql-stat1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Country> .
							}
">

</div>
	   
<div id="sparql-stat2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Country> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-stat3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Country>. 
        }
">
</div>


<div id="sparql-stat4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Country>. 
							}


">
</div>

<div id="sparql-stat5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STAT COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Country>. 
							?resource rdfs:label ?STAT.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-stat6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?STAT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Country>. 
							  ?indegree rdfs:label ?STAT.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL STÁT KONEC-------------------------->

<!----------SPARQL SVÁTEK  -------------------------->
<div id="sparql-svatek1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Holiday> .
							}
">

</div>
	   
<div id="sparql-svatek2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Holiday> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-svatek3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Holiday>. 
        }
">
</div>


<div id="sparql-svatek4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Holiday>. 
							}


">
</div>

<div id="sparql-svatek5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SVATEK COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Holiday>. 
							?resource rdfs:label ?SVATEK.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-svatek6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SVATEK COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Holiday>. 
							  ?indegree rdfs:label ?SVATEK.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SVÁTEK KONEC-------------------------->

<!----------SPARQL SVĚTEC  -------------------------->
<div id="sparql-svetec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/Saint> .
							}
">

</div>
	   
<div id="sparql-svetec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Saint> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-svetec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Saint>. 
        }
">
</div>


<div id="sparql-svetec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Saint>. 
							}


">
</div>

<div id="sparql-svetec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SVETEC COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Saint>. 
							?resource rdfs:label ?SVETEC.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-svetec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SVETEC COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Saint>. 
							  ?indegree rdfs:label ?SVETEC.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SVĚTEC KONEC-------------------------->

<!----------SPARQL SVĚTOVÉ DĚDICTVÍ  -------------------------->
<div id="sparql-svetove-dedictvi1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/WorldHeritageSite> .
							}
">

</div>
	   
<div id="sparql-svetove-dedictvi2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/WorldHeritageSite> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-svetove-dedictvi3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/WorldHeritageSite>. 
        }
">
</div>


<div id="sparql-svetove-dedictvi4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/WorldHeritageSite>. 
							}


">
</div>

<div id="sparql-svetove-dedictvi5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SvetoveDedictvi COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/WorldHeritageSite>. 
							?resource rdfs:label ?SvetoveDedictvi.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-svetove-dedictvi6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?SvetoveDedictvi COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/WorldHeritageSite>. 
							  ?indegree rdfs:label ?SvetoveDedictvi.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL SVĚTOVÉ DĚDICTVÍ KONEC-------------------------->

<!----------SPARQL TELEVIZNÍ POŘAD  -------------------------->
<div id="sparql-televizni-porad1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/TelevisionShow> .
							}
">

</div>
	   
<div id="sparql-televizni-porad2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/TelevisionShow> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-televizni-porad3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/TelevisionShow>. 
        }
">
</div>


<div id="sparql-televizni-porad4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/TelevisionShow>. 
							}


">
</div>

<div id="sparql-televizni-porad5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TelevizniPorad COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/TelevisionShow>. 
							?resource rdfs:label ?TelevizniPorad.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-televizni-porad6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TelevizniPorad COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/TelevisionShow>. 
							  ?indegree rdfs:label ?TelevizniPorad.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL TELEVIZNÍ POŘAD KONEC-------------------------->

<!----------SPARQL TENISTA  -------------------------->
<div id="sparql-tenista1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/TennisPlayer> .
							}
">

</div>
	   
<div id="sparql-tenista2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/TennisPlayer> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-tenista3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/TennisPlayer>. 
        }
">
</div>


<div id="sparql-tenista4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/TennisPlayer>. 
							}


">
</div>

<div id="sparql-tenista5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TENISTA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/TennisPlayer>. 
							?resource rdfs:label ?TENISTA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-tenista6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TENISTA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/TennisPlayer>. 
							  ?indegree rdfs:label ?TENISTA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>

<!----------SPARQL TENISTA KONEC  -------------------------->


<!----------SPARQL TEPNA  -------------------------->
<div id="sparql-tepna1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Artery> .
							}
">

</div>
	   
<div id="sparql-tepna2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Artery> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-tepna3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Artery>. 
        }
">
</div>


<div id="sparql-tepna4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Artery>. 
							}


">
</div>

<div id="sparql-tepna5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TEPNA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Artery>. 
							?resource rdfs:label ?TEPNA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-tepna6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?TEPNA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Artery>. 
							  ?indegree rdfs:label ?TEPNA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL TEPNA KONEC-------------------------->

<!----------SPARQL ULICE  -------------------------->
<div id="sparql-ulice1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Street> .
							}
">

</div>
	   
<div id="sparql-ulice2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Street> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-ulice3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Street>. 
        }
">
</div>


<div id="sparql-ulice4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Street>. 
							}


">
</div>

<div id="sparql-ulice5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ULICE COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Street>. 
							?resource rdfs:label ?ULICE.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-ulice6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ULICE COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Street>. 
							  ?indegree rdfs:label ?ULICE.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ULICE KONEC-------------------------->

<!----------SPARQL UMĚLEC  -------------------------->

<div id="sparql-umelec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Artist> .
							}
">
</div>
	   
<div id="sparql-umelec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
							 { ?resource rdf:type <http://dbpedia.org/ontology/Artist>.
							 ?resource ?p ?o.
							  }

">
</div>


<div id="sparql-umelec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
								  ?resource rdf:type <http://dbpedia.org/ontology/Artist>. 
								}
">
</div>


<div id="sparql-umelec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
								  ?indegree rdf:type <http://dbpedia.org/ontology/Artist>. 
								}	


">
</div>

<div id="sparql-umelec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?NARODNOST COUNT(?artist) as ?PocetUmelcu

							{
							?artist rdf:type <http://dbpedia.org/ontology/Artist>.
							?artist <http://dbpedia.org/ontology/nationality> ?nationality.
							?nationality rdfs:label ?NARODNOST.
							}
							ORDER BY DESC(?PocetUmelcu)

">	
</div>

<div id="sparql-umelec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?VZDELANI COUNT(?artist) as ?PocetUmelcu

							{
							?artist rdf:type <http://dbpedia.org/ontology/Artist>.
							?artist <http://dbpedia.org/ontology/education> ?education.
							?education rdfs:label ?VZDELANI.
							}
							ORDER BY DESC(?PocetUmelcu)


">	
</div>


<div id="sparql-umelec7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
		   data-sgvizler-query="SELECT ?UMELEC COUNT(?resource) AS ?OutDegree
								  WHERE
									{ 
									  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
									  ?resource rdf:type <http://dbpedia.org/ontology/Artist>. 
									  ?resource rdfs:label ?UMELEC.
									}
									ORDER BY DESC(?OutDegree)
									LIMIT 100
">
</div>


<div id="sparql-umelec8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?UMELEC COUNT(?resource) AS ?InDegree
							  WHERE
								{ 
								  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
								  ?indegree rdf:type <http://dbpedia.org/ontology/Artist>. 
								  ?indegree rdfs:label ?UMELEC.
								}	
								ORDER BY DESC(?InDegree)
								LIMIT 100

">
</div>


<!----------SPARQL UMĚLEC KONEC -------------------------->


<!----------SPARQL UNIVERZITA  -------------------------->
<div id="sparql-univerzita1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/University> .
							}
">

</div>
	   
<div id="sparql-univerzita2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/University> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-univerzita3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/University>. 
        }
">
</div>


<div id="sparql-univerzita4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							?indegree rdf:type <http://dbpedia.org/ontology/University>. 
							}


">
</div>

<div id="sparql-univerzita5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?UNIVERZITA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/University>. 
							?resource rdfs:label ?UNIVERZITA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-univerzita6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?UNIVERZITA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/University>. 
							  ?indegree rdfs:label ?UNIVERZITA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL UNIVERZITA KONEC-------------------------->

<!----------SPARQL VÁLKA  -------------------------->
<div id="sparql-valka1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/MilitaryConflict> .
							}
">

</div>
	   
<div id="sparql-valka2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryConflict> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-valka3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryConflict>. 
        }
">
</div>


<div id="sparql-valka4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryConflict>. 
							}


">
</div>

<div id="sparql-valka5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VALKA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryConflict>. 
							?resource rdfs:label ?VALKA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-valka6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VALKA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryConflict>. 
							  ?indegree rdfs:label ?VALKA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VÁLKA KONEC-------------------------->


<!----------SPARQL VĚDEC  -------------------------->
<div id="sparql-vedec1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Scientist> .
							}
">

</div>
	   
<div id="sparql-vedec2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Scientist> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-vedec3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Scientist>. 
        }
">
</div>


<div id="sparql-vedec4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Scientist>. 
							}


">
</div>

<div id="sparql-vedec5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VEDEC COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Scientist>. 
							?resource rdfs:label ?VEDEC.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-vedec6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VEDEC COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Scientist>. 
							  ?indegree rdfs:label ?VEDEC.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VĚDEC KONEC-------------------------->


<!----------SPARQL VIDEO HRA  -------------------------->
<div id="sparql-videohra1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/VideoGame> .
							}
">

</div>
	   
<div id="sparql-videohra2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/VideoGame> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-videohra3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/VideoGame>. 
        }
">
</div>


<div id="sparql-videohra4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/VideoGame>. 
							}


">
</div>

<div id="sparql-videohra5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VideoHra COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/VideoGame>. 
							?resource rdfs:label ?VideoHra.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-videohra6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VideoHra COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/VideoGame>. 
							  ?indegree rdfs:label ?VideoHra.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VIDEO HRA KONEC-------------------------->

<!----------SPARQL VODNÍ PLOCHA  -------------------------->
<div id="sparql-vodni-plocha1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Lake> .
							}
">

</div>
	   
<div id="sparql-vodni-plocha2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Lake> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-vodni-plocha3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Lake>. 
        }
">
</div>


<div id="sparql-vodni-plocha4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Lake>. 
							}


">
</div>

<div id="sparql-vodni-plocha5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VodniPlocha COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Lake>. 
							?resource rdfs:label ?VodniPlocha.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-vodni-plocha6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VodniPlocha COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Lake>. 
							  ?indegree rdfs:label ?VodniPlocha.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VODNÍ PLOCHA KONEC-------------------------->


<!----------SPARQL VODNÍ TOK  -------------------------->
<div id="sparql-vodni-tok1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/River> .
							}
">

</div>
	   
<div id="sparql-vodni-tok2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/River> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-vodni-tok3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/River>. 
        }
">
</div>


<div id="sparql-vodni-tok4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/River>. 
							}


">
</div>

<div id="sparql-vodni-tok5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VodniTok COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/River>. 
							?resource rdfs:label ?VodniTok.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-vodni-tok6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VodniTok COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/River>. 
							  ?indegree rdfs:label ?VodniTok.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VODNÍ TOK KONEC-------------------------->


<!----------SPARQL VOJENSKÝ VELITEL  -------------------------->
<div id="sparql-vojensky-velitel1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
							WHERE
							{ 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryPerson> .
							}
">

</div>
	   
<div id="sparql-vojensky-velitel2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryPerson> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-vojensky-velitel3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryPerson>. 
        }
">
</div>


<div id="sparql-vojensky-velitel4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryPerson>. 
							}


">
</div>

<div id="sparql-vojensky-velitel5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VojenskyVelitel COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/MilitaryPerson>. 
							?resource rdfs:label ?VojenskyVelitel.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-vojensky-velitel6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VojenskyVelitel COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							 ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							 ?indegree rdf:type <http://dbpedia.org/ontology/MilitaryPerson>. 
							 ?indegree rdfs:label ?VojenskyVelitel. 
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VOJENSKÝ VELITEL KONEC-------------------------->

<!----------SPARQL VOLEJBALISTA -------------------------->
<div id="sparql-volejbalista1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/VolleyballPlayer> .
							}
">

</div>
	   
<div id="sparql-volejbalista2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/VolleyballPlayer> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-volejbalista3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/VolleyballPlayer>. 
        }
">
</div>


<div id="sparql-volejbalista4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/VolleyballPlayer>. 
							}


">
</div>

<div id="sparql-volejbalista5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VOLEJBALISTA COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/VolleyballPlayer>. 
							?resource rdfs:label ?VOLEJBALISTA.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-volejbalista6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?VOLEJBALISTA COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/VolleyballPlayer>. 
							  ?indegree rdfs:label ?VOLEJBALISTA.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VOLEJBALISTA KONEC-------------------------->


<!----------SPARQL VÁLEČNÁ LOĎ   -------------------------->
<div id="sparql-valecna-lod1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Ship> .
							}
">

</div>
	   
<div id="sparql-valecna-lod2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Ship> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-valecna-lod3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Ship>. 
        }
">
</div>


<div id="sparql-valecna-lod4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Ship>. 
							}


">
</div>

<div id="sparql-valecna-lod5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ValecnaLod COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Ship>. 
							?resource rdfs:label ?ValecnaLod.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-valecna-lod6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ValecnaLod COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Ship>. 
							  ?indegree rdfs:label ?ValecnaLod.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL VÁLEČNÁ LOĎ KONEC-------------------------->


<!----------SPARQL WEBOVÁ STRÁNKA   -------------------------->
<div id="sparql-webova-stranka1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Website> .
							}
">

</div>
	   
<div id="sparql-webova-stranka2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Website> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-webova-stranka3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Website>. 
        }
">
</div>


<div id="sparql-webova-stranka4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Website>. 
							}


">
</div>

<div id="sparql-webova-stranka5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?WebovaStranka COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Website>. 
							?resource rdfs:label ?WebovaStranka.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-webova-stranka6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?WebovaStranka COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Website>. 
							  ?indegree rdfs:label ?WebovaStranka.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL WEBOVÁ STRÁNKA  KONEC-------------------------->

<!----------SPARQL ZÁVOD FORMULE 1   -------------------------->
<div id="sparql-zavod-formule11" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/GrandPrix> .
							}
">

</div>
	   
<div id="sparql-zavod-formule12" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/GrandPrix> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-zavod-formule13" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/GrandPrix>. 
        }
">
</div>


<div id="sparql-zavod-formule14" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/GrandPrix>. 
							}


">
</div>

<div id="sparql-zavod-formule15" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZavodFormule1 COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/GrandPrix>. 
							?resource rdfs:label ?ZavodFormule1.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-zavod-formule16" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZavodFormule1 COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/GrandPrix>. 
							  ?indegree rdfs:label ?ZavodFormule1.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ZÁVOD FORMULE 1  KONEC-------------------------->


<!----------SPARQL ZBRAŇ   -------------------------->
<div id="sparql-zbran1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Weapon> .
							}
">

</div>
	   
<div id="sparql-zbran2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/Weapon> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-zbran3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Weapon>. 
        }
">
</div>


<div id="sparql-zbran4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Weapon>. 
							}


">
</div>

<div id="sparql-zbran5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZBRAN COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Weapon>. 
							?resource rdfs:label ?ZBRAN.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-zbran6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZBRAN COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Weapon>. 
							  ?indegree rdfs:label ?ZBRAN.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ZBRAŇ  KONEC-------------------------->

<!----------SPARQL ZEMĚ NA HRÁCH   -------------------------->
<div id="sparql-zeme-na-hrach1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/OlympicResult> .
							}
">

</div>
	   
<div id="sparql-zeme-na-hrach2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/OlympicResult> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-zeme-na-hrach3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/OlympicResult>. 
        }
">
</div>


<div id="sparql-zeme-na-hrach4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/OlympicResult>. 
							}


">
</div>

<div id="sparql-zeme-na-hrach5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZemeNaHrach COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/OlympicResult>. 
							?resource rdfs:label ?ZemeNaHrach.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-zeme-na-hrach6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZemeNaHrach COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/OlympicResult>. 
							  ?indegree rdfs:label ?ZemeNaHrach.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ZEMĚ NA HRÁCH  KONEC-------------------------->


<!----------SPARQL ŽELEZNIČNÍ TRAŤ   -------------------------->
<div id="sparql-zeleznicni-trat1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/RailwayLine> .
							}
">

</div>
	   
<div id="sparql-zeleznicni-trat2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {
							?resource rdf:type <http://dbpedia.org/ontology/RailwayLine> .
                           ?resource ?p ?o.
                           }

">
</div>


<div id="sparql-zeleznicni-trat3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/RailwayLine>. 
        }
">
</div>


<div id="sparql-zeleznicni-trat4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/RailwayLine>. 
							}


">
</div>

<div id="sparql-zeleznicni-trat5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZeleznicniTrat COUNT(?outdegree) AS ?OutDegree
							WHERE
							{ 
							?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/RailwayLine>. 
							?resource rdfs:label ?ZeleznicniTrat.
							}
							ORDER BY DESC(?OutDegree)
							LIMIT 100
">
</div>


<div id="sparql-zeleznicni-trat6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT ?ZeleznicniTrat COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/RailwayLine>. 
							  ?indegree rdfs:label ?ZeleznicniTrat.
							  
							}
							ORDER BY DESC(?InDegree)
							LIMIT 100

">
</div>
<!----------SPARQL ŽELEZNIČNÍ TRAŤ  KONEC-------------------------->
