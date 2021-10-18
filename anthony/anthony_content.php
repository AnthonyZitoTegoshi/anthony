<?php 

$p = array(
    "Eu tenho 17 anos e estou no 3º ano do EM integrado ao técnico em Informática para Internet. Sou um aluno que veio do Marconi e sempre gostei da mágica do conhecimento e de descobertas novas.",
    "Comecei a estudar no curso técnico sem saber muito sobre a área, mas, logo depois que entrei, me apaixonei por informática a decidi que me esforçaria ao máximo aqui no IF.",
    "Após encerrar o curso no IF, eu pretendo continuar nessa mesma área de tecnologia e aparalhos eletrônicos. Mas ainda não tenho certeza sobre por onde começar.",
    "Muito provavelmente eu começaria por algo como engenharia da computação ou eletrônica e depois partiria para uma ciência da computação ou qualquer coisa parecida...",
    "Além dos conteúdos da escola, eu estudo programação e computação no geral com livros e sites, luto judô e sou um ex-nadador com mais de 120 medalhas de competições.",
    "Junto a tudo isso, também participo frequentemente de olimpíadas escolares com as matérias do núcleo comum e essas coisas como ONC, OBEFEP, IPhCO, OBA, OBMEP, OIMSF e etc.",
    "Apesar de todos os meus prós, ainda me falta iniciativa para as coisas que eu preciso fazer, já que eu, dificilmente, ajo sem alguém falar o que devo fazer.",
	"Eu também preciso aprender a falar em público, ser mais extrovertido e não ficar corado toda vez que estiver em uma situação mais estressante.",
    "Além disso, a informação mais importante é: minha classe preferida são os magos/feiticeiros. O fato de ter essa ideia da pessoa estudando magia em uma academia com tomos e pergaminhos me chama muita atenção.",
	"Eu acho que isso deve ser um reflexo do fato de ficar super animado só de pensar sobre o conhecimento, tecnologias e essas coisas.",
    "E é isso! Eu falei de tudo sobre mim de uma maneira bem resumida e explicativa. Não entrei em muitos detalhes, mas passei por tudo que queria que você soubesse. Até mais!"
);

$h2 = array("Anthony Zito Tegoshi");

$h3 = array(
    "Planos para o futuro?",
    "Habilidades",
    "Coisas a melhorar",
    "FIM!"
);

$img = array(
    "img/anthony.jpg",
    "img/ifsp.png",
    "img/tomo.jpg"
);

switch ($_POST['cont']) {
    case "h2":
        echo json_encode($h2);
        break;
    case "h3":
        echo json_encode($h3);
        break;
    case "p":
        echo json_encode($p);
        break;
    case "img":
        echo json_encode($img);        
}

?>