function expandCollapse(className, link) {
	var e = document.getElementsByClassName(className);

	for (var i = 0, len = e.length; i < len; i++) {
		e[i].style.display = "none";
	}

	link.innerHTML = "Expand";
}