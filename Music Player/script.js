const songs = [
	"Babyshambles - There She Goes.mp3",
	"Rilo Kiley - Papillon.mp3",
	"Joe Cocker - Look What You've Done.mp3",
	"Kris Kristofferson - Good Morning John.mp3",
	"Johnny Cash - Cocaine Carolina.mp3",
	"Willie Nelson - Bonaparte's Retreat.mp3",
	"Vama Veche - Cu Tine.mp3",
	"QotSA - Head Like A Haunted House.mp3",
	"IU - Love of B.mp3"
];


const createSongList = () => {
	const list = document.createElement('ol');
	for (var i = 0; i < songs.length; i++) {
		const item = document.createElement('li');
		item.appendChild(document.createTextNode(songs[i]));
		list.appendChild(item);
	}
	return list;
};

document.getElementById('songList').appendChild(createSongList() );

document.getElementById('songList').onclick = (e) => {
	// console.log(e);
	const clickedItem = e.target;
	const source = document.getElementById("source");
	source.src = 'Songs/' + clickedItem.innerText;
	// console.log(clickedItem.innerText);
	document.getElementById("currentlyPlayingSong").innerText = clickedItem.innerText;
	document.getElementById('player').load();
	document.getElementById('player').play();
	document.getElementById('playButton').style.display = 'none';
	document.getElementById('playButton').style.opacity = '1';
	document.getElementById('pauseButton').style.display = 'inline';
};

const playAudio = () => {
	if (document.getElementById('player').readyState) {
		document.getElementById('player').play();
		document.getElementById('playButton').style.display = 'none';
		document.getElementById('pauseButton').style.display = 'inline';
	}
};

const pauseAudio = () => {
	if (document.getElementById('player').readyState) {
		document.getElementById('player').pause();
		document.getElementById('pauseButton').style.display = 'none';
		document.getElementById('playButton').style.display = 'inline';
	}
};