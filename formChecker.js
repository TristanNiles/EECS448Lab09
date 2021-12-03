let un = '\0';
let pw = '\0';
let crewQ = 0;
let goldQ = 0;
let creamQ = 0;

function submitFunc() {
	updateVars();
	
	if (!checkEmail()) {
		alert("Email is not valid.");
		return;
	}

	if (pw == '\0' || pw == "") {
		alert("You have not entered a password.");
		return;
	}

	if (!checkQ()) {
		alert("Invalid quantities.");
		return;
	}

	if (!checkShipping()) {
		alert("You have not picked a shipping option.");
		return;
	}
	
	document.getElementById("myForm").submit();
	
}

function updateVars() {
	un = document.getElementById("un").value;
	pw = document.getElementById("pw").value;
	crewQ = document.myForm.crew.value;
	goldQ = document.myForm.gold.value;
	creamQ = document.myForm.cream.value;
}

function checkShipping() {
	return (document.getElementById("free").checked || document.getElementById("overnight").checked || document.getElementById("three").checked);

}

function checkEmail() {
	let atIx;
	let dotIx;
	let prefix;
	let midfix;
	let postfix;
	let symbolless = '\0';
	if (un.includes(" ")) {
		return false;
	}
	if (un.includes('@') && un.includes ('.')) {
		atIx = un.indexOf('@');
		dotIx = un.indexOf('.');
		if (dotIx <= atIx+1 || atIx <= 0 || dotIx >= un.length -1) {
			return false;
		}
		prefix = un.substring(0, atIx);
		midfix = un.substring(atIx, dotIx);
		postfix = un.substring(dotIx, un.length);
		symbolless.concat(prefix, midfix, postfix);
		if (symbolless.includes('@') || symbolless.includes('.')) {
			return false;
		}
		return true;
	}
	else {
		return false;
	}
		
}

function checkQ() {
	console.log(un);
	console.log(pw);
	console.log(crewQ);
	console.log(goldQ);
	console.log(creamQ);
	return (crewQ != "" && goldQ != "" && creamQ != "" && crewQ >= 0 && goldQ >= 0 && creamQ >= 0);
}