function clone(){
	let element = document.querySelector("tr#original");
	let clones = element.cloneNode(true);
	let clones_input = clones.querySelector('select');
	clones.removeAttribute("id");
	clones_input.selectedIndex = 0;
	let element_container = document.querySelector("#details-container");
	element_container.appendChild(clones);
}

function cloneTime(){
	let element = document.querySelector("tr#original-2");
	let clones = element.cloneNode(true);
	let clones_input = clones.querySelectorAll('input');
	clones.removeAttribute("id");
	clones_input.forEach( input => input.value = 0 );
	let element_container = document.querySelector("#details-container-2");
	element_container.appendChild(clones);
}