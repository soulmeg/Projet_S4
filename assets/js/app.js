function clone(){
	let element = document.querySelector("tr#original");
	let clones = element.cloneNode(true);
	let clones_input = clones.querySelector('select');
	clones.removeAttribute("id");
	clones_input.selectedIndex = 0;
	let element_container = document.querySelector("#details-container");
	element_container.appendChild(clones);
}