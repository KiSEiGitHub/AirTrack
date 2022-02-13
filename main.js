const Atag = document.querySelectorAll('a');
const CurrentLocation = location.href;

for (let i = 0; i < Atag.length; i++) {
	if(Atag[i].href === CurrentLocation) {
		Atag[i].className = 'isActive'
	}
}