(() => {

const displaySearchResults = (term) => {

	const searchUrl = `https://itunes.apple.com/search?term=${term.toLowerCase().replace(/ /g,"+")}`;
	console.log(searchUrl);
	fetch(searchUrl, { mode: 'no-cors'}).then((response) => response.json())
	.then((data) => {
		let songList = document.getElementById("songs");
		if (!songList){
	  	songList = document.createElement("main");
			songList.setAttribute("id", "songs");
			document.body.appendChild(songList);
		} 

		while (songList.firstChild) {
		    songList.removeChild(songList.firstChild);
		}

		data.results.map(song => {
			// console.log(song);
			const image = document.createElement("img");
			image.src = song.artworkUrl100;
			const artist = document.createElement('p');
			artist.innerText = song.artistName;
			const songTitle = document.createElement('p');
			songTitle.innerText = song.trackName;

			const preview = document.createElement('audio');
			const source = document.createElement('source');
			source.src = song.previewUrl;
			preview.appendChild(source);
			preview.setAttribute('controls', '');

			const article = document.createElement("article");
			article.appendChild(image);
			article.appendChild(artist);
			article.appendChild(songTitle);
			article.appendChild(preview);

			songList.appendChild(article);
		});

		//change the page to display the songlist
		document.getElementsByTagName("header")[0].setAttribute("class", "sticky");
	})
};

const handleSearchButton = () => {
	const searchTerm = document.getElementById('searchInput').value;
	if (searchTerm !== "") {
		displaySearchResults(searchTerm);
	} else {alert('enter a search term')}
}

document.getElementById('searchButton').addEventListener('click', handleSearchButton);

//do the same thing when user presses enter in the input box (code from stackoverflow)
document.getElementById('searchInput').onkeypress = (e) => {
    if (!e) e = window.event;
    var keyCode = e.keyCode || e.which;
    if (keyCode == '13'){
      // Enter pressed
      handleSearchButton();
      return false;
    }
  }

// stop old audio elements that are playing, when a new one is started
document.addEventListener('play', () => {
	const audio = document.getElementsByTagName('audio');
	for (let i = 0; i < audio.length; i++) {
		if (audio[i] != event.target) {
			audio[i].pause();
		}
	}
},true);


})();

