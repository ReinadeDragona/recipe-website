//Contains small tweaks to help development. 
//NEEDS to be defined first.
var developmentTweaks = false;

if (document.readyState !== "loading") {
	setTimeout(onReady, 0);
} else {
	document.addEventListener("DOMContentLoaded", onReady);
}

async function onReady() {
	if (developmentTweaks === true)
		console.log(Date());

	Promise.all([
		initializeListeners(),
		updatePortions()
	]);
}

async function initializeListeners() {
	document.getElementById('portion-quantity').addEventListener("input", updatePortions);
}

async function updatePortions() {
	var portionQuantityElement = document.getElementById('portion-quantity');
	if (portionQuantityElement.value < 0) {
		portionQuantityElement.value = 1;
	}
	else if (portionQuantityElement.value > 10) {
		portionQuantityElement.value = 10;
	}
	var portionElements = document.querySelectorAll('.portion-number');
	portionElements.forEach(async function (portionElement) {
		portionElement.innerText = portionElement.getAttribute('original-number') * portionQuantityElement.value;
	});
}
