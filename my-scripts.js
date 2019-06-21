function portfClicked()
{
	if (document.getElementById('dropdown').classList.contains('active')) 
			document.getElementById('dropdown').classList.add('inactive')
		else document.getElementById('dropdown').classList.remove('inactive');
	document.getElementById('dropdown').classList.toggle('active');
	document.getElementById('portf').classList.toggle('active');
}
//console.log(window.innerWidth);
if (window.innerWidth >= 595) { //(930 width is another option)
	document.getElementById('portf').onclick = portfClicked;
} else {
	document.getElementById('portf-anchor').href = 'index.html#port-container';
}