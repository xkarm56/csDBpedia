						<div id="statBox12" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT DISTINCT ?TRIDA COUNT (?x) AS ?PocetEntitTridy
													 WHERE {
													?TRIDA rdf:type owl:Class .
													?x a ?TRIDA .
													}
													ORDER BY DESC(?PocetEntitTridy)

						">
						</div>
						
						
						<div id="statBox13" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT ?PROPERTA COUNT (?PROPERTA) AS ?PocetUzitiPropertTOP100
													WHERE {
												   ?s ?PROPERTA ?o. 
												   }
													ORDER BY DESC(?PocetUzitiPropertTOP100)
													LIMIT 100
						">
						</div>
						
						<div id="statBox14" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT ?ZDROJ count(?object) as ?PocetOutDegreeZdrojuTOP100
													WHERE {
													?ZDROJ dbpedia-owl:wikiPageWikiLink ?object.
													
													}
													ORDER BY DESC(?PocetOutDegreeZdrojuTOP100)
													LIMIT 100
						">
						</div>
						
							<div id="statBox15" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT ?ZDROJ count(?odkaz) as ?PocetInDegreeZdrojuTOP100
													WHERE {

													  ?odkaz <http://dbpedia.org/ontology/wikiPageWikiLink> ?ZDROJ.
													
													}
													ORDER BY DESC(?PocetInDegreeZdrojuTOP100)
													LIMIT 100
						">
						</div>
						
							<div id="statBox16" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT ?TRIDA COUNT(?s) AS ?PocetIndegreeTrid 
													WHERE {
													?s dbpedia-owl:wikiPageWikiLink ?o.
													?o rdf:type ?TRIDA
													} 
													GROUP BY ?TRIDA 
													ORDER BY DESC(?PocetIndegreeTrid)
						">
						</div>
						
							<div id="statBox17" class="stat"
							   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
							   data-sgvizler-query="SELECT ?ENTITA COUNT(?s) as ?PocetInDegreeEntitTOP100
													WHERE {
													?s <http://dbpedia.org/ontology/wikiPageWikiLink> ?ENTITA.
													?ENTITA rdf:type ?object.
												
													} 
													ORDER BY DESC(?PocetInDegreeEntitTOP100) LIMIT 100
						">
						</div>
		
		
		
		
		
		
		
		
		