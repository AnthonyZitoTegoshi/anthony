/*
*
* EU SEI QUE DEVERIA FAZER ISSO COM UM LOOP,
* MAS, CASO EU COLOCASSE DO SEGUINTE MODO,
* ELE NÃO QUERIA FUNCIONAR DE JEITO NENHUM.
* O INTERESSANTE É QUE SE EU COLOCASSE UM
* ALERT ANTES ELE FUNCIONAVA...
* NÃO SEI O QUE DIABOS SIGNIFICA ISSO
* CÓDIGO NORMAL:

var conts = ["h2", "h3", "p", "img"];
for (i = 0; i < conts.length; i++) {
	elem = document.getElementsByTagName(conts[i]);
	$.post("anthony_content.php", "cont=" + conts[i], function (data) {
		for (j = 0; j < elem.length; j++) {
			elem[j].innerHTML = JSON.parse(data)[j];
		}
	});
}

------------------------------------------------------------------------
*
* EU TAMBÉM PODERIA FAZER UM QUE PEGASSE AS
* DIVS INTEIRAS OU O MAIN E COLOCASSE TODAS
* AS INFORMAÇÕES DIRETO, MAS ACHEI QUE FAZER
* O MÉTODO MAIS TRABALHOSO AJUDARIA NO APRENDIZADO
*
*/

elem1 = document.getElementsByTagName("h2");
$.post("anthony_content.php", "cont=h2", function (data) {
	for (j = 0; j < elem1.length; j++) {
		elem1[j].innerHTML = JSON.parse(data)[j];
	}
});

elem2 = document.getElementsByTagName("h3");
$.post("anthony_content.php", "cont=h3", function (data) {
	for (j = 0; j < elem2.length; j++) {
		elem2[j].innerHTML = JSON.parse(data)[j];
	}
});

elem3 = document.getElementsByTagName("p");
$.post("anthony_content.php", "cont=p", function (data) {
	for (j = 0; j < elem3.length; j++) {
		elem3[j].innerHTML = JSON.parse(data)[j];
	}
});

elem4 = document.getElementsByTagName("img");
$.post("anthony_content.php", "cont=img", function (data) {
	for (j = 0; j < elem4.length; j++) {
		elem4[j].setAttribute("src", JSON.parse(data)[j]);
	}
});