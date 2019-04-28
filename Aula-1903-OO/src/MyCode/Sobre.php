<?php
namespace MyCode;
class Sobre {
	
	public function getSobre() {
		$texto['lista'] = array(
			array(
				"O que é um framework?",
				"R:Um Framework é um conjunto de bibliotecas com diversas funções que podem ser utilizadas por desenvolvedores, utilizando eles evita o desperdicio de tempo com desenvolvimentos simples de certas funções em diversos sistemas diferentes agilizando no desenvolvimento."
			),array(
				"O que é padrão de projeto?",
				"R: Um padrão de projeto agiliza no desenvolvimento de um sistema, pois são soluções abstratas de alto nível. Esses padrões de projeto não são aplicados apenas em desenvolvimento de softwares, pois os mesmos podem ser utilizados em diversas áreas da vida, da engenharia e até na arquitetura."
			),array(
				"Quais as principais categorias de padrões de projetos?",
				"R: As principais categorias são: criação, comportamento e de estrutura."
			),array(
				"Qual o principal padrão de projeto utilizado nesta aplicação?",
				"R: O principal padrão de projeto utilizado nesta aplicação foi o MVC (Model View Controller)."
			)
		);
		
		
		
		return $texto;
	}
	
}