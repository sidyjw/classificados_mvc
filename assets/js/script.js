document.querySelector("#sairLink").onclick = e =>{
	e.preventDefault();
	const elemento = e.target;
	const link = elemento.getAttribute('href');

	fetch(link)
		.then(res => window.location.reload());
}