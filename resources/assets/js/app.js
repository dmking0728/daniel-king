// Theme by default loads a jQuery as dependency of the main script.
// Let's include it using ES6 modules import.
import $ from 'jquery'

document.querySelector('.third-button').addEventListener('click', function () {

	document.querySelector('.animated-icon3').classList.toggle('open');
});

if(document.location.pathname == '/') {

	window.addEventListener("scroll", function() {
		if (document.body.scrollTop > (window.innerHeight)*0.6 || document.documentElement.scrollTop > (window.innerHeight)*0.6) {
		  document.querySelector(".navbar").style.boxShadow = "#0000004d 0px 1px 15px 0px";
		} else {
		  document.querySelector(".navbar").style.boxShadow = "none";
		}
	  });
}