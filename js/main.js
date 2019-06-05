// Global variables
let text = "Hi, I'm Roman. I talk to machines.";
let typeArray = text.split(""); 
let typeWriter;

// Typewriting effect
typeWriter = setInterval(() => {

	if (typeArray.length > 0) {
		document.querySelector(".typedScript").textContent += typeArray.shift();
	} else {
		clearInterval(typeWriter);
	}

}, 100);


//show hidden label on input

