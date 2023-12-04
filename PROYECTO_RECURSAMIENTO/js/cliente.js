let burger = document.getElementById('burger'),
	 nav    = document.getElementById('main-nav'),
	 slowmo = document.getElementById('slowmo');
burger.addEventListener('click', function(e){
	// chk = document.querySelector(".chk");
	// html = document.querySelector("html");
	// chk.click();
	// state= chk.checked;
	// console.log(state)
	nav.classList.toggle("close");
		this.classList.toggle('is-open');
	// if (state=="true") {
	// 	html = document.querySelector("html").style.overflowY="hidden"
		
	// } else {
	// 	html = document.querySelector("html").style.overflowY="scroll"
	// }
});


slowmo.addEventListener('click', function(e){
	this.classList.toggle('is-slowmo');
});


/* Onload demo - dirty timeout */
let clickEvent = new Event('click');

window.addEventListener('load', function(e) {
	slowmo.dispatchEvent(clickEvent);
	burger.dispatchEvent(clickEvent);
	
	setTimeout(function(){
		burger.dispatchEvent(clickEvent);
		
		setTimeout(function(){
			slowmo.dispatchEvent(clickEvent);
		}, 3500);
	}, 5500);
});