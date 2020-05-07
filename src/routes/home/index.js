import { h } from "preact";
import { useEffect } from 'preact/hooks';
import style from "./style";

const Home = () => {

	/**
	 * Netlify CMS's accept invite link land on home page.
	 * This redirection takes it to the right place(/admin).
	 */

	useEffect(() => {
		if (window !== undefined && window.location.href.includes('#invite_token')) {
			const { href } = window.location;
			window.location.href= `${href.substring(0, href.indexOf('#'))}admin${href.substring(href.indexOf('#'))}`;
		}
	},[]);

	return (
		<div class={style.home}>
			<div class={style.about}>
				<div class={style.imageContainer}>
					<div class={style.image} />
				</div>
				<div class={style.quote}>
					<div class={style.details}>
						Meu nome é FERNANDO REIS. Sou Formado em Ciência da Computação no CIESA. Atualmemte Desenvolvo sistemas WEB
					Voltado para Front-End e Back-End, usando Tecnologias como ReactJS, NodeJS, HTML5, CSS3, BOOTSTRAP, ANGULARJS ETC.
					Gosto muito de programar e obter conhecimentos pois Estou em busca de oportunidades.
					</div>
					<div class={style.author}>- Fernando, Analista Desenvolvedor Trainee</div>
				</div>
			</div>
			<div class={style.bio}>
				<p class={style.bioleft}>
					Olá você está no meu pequeno Site que Desenvolvi usando ReactJS, sempre gostei de Tecnologias
					como celulares, videogames, notebooks e computadores. Aos 14 anos comecei a fazer cursos de informática,
					básico ao avançado, inglês entre outros cursos e palestras voltadas para Tecnologias. No Ensino Médio já
					tinha optado por cursar faculdade na área de tecnologia.
				</p>
				<p class={style.bioright}>
					Em 2015 comecei a cursar Ciência da Computação no Centro Universitário De Ensino superior Do
					Amazonas - CIESA. Durante a faculdade dei início no desenvolvimento de pequenos projetos, e isso 
					me levou a gostar ainda mais de desenvolver softwares. E os cursos e palestras praticados durante e após 
					a faculdade me ajudam a seguir em frente e buscar ainda mais conhecimentos.
				</p>
			</div>
		</div>
	);
};

export default Home;
