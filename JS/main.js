// Global variables
var text = "Shall we play a game?";
var typeWriter;
var index = 0;

// Typewriting effect
typeWriter = setInterval(function() {
	document.querySelector(".typedScript").textContent += text[index];

	index += 1;

	if (index > text.length -1) {
		clearInterval(typeWriter);
	}

}, 100);