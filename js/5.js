var numLikes = 0;

function likes() {
	numLikes = numLikes + 1;
	document.getElementById("likes5").innerHTML = numLikes;
}

function reset() {
	numLikes = 0;
	document.getElementById("likes5").innerHTML = numLikes;
}

