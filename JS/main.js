// Global variables
let text = "Shall we play a game?";
let typeWriter;
let index = 0;

// Typewriting effect
typeWriter = setInterval(() => {
	document.querySelector(".typedScript").textContent += text[index];

	index += 1;

	if (index > text.length -1) {
		clearInterval(typeWriter);
	}

}, 100);


//show hidden label on input

