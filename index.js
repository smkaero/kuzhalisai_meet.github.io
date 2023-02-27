const msingerSelect = document.getElementById('msinger');
const fsingerSelect = document.getElementById('fsinger');
const songInput = document.getElementById('song');
const songList = document.getElementById('songList');
let serialNumber = 1;

function addSong() {
	const msinger = msingerSelect.value;
	const fsinger = fsingerSelect.value;
	const song = songInput.value;

	if (!song || song.trim() === '') {
		alert('Please enter a song');
		return;
	}

	const row = document.createElement('tr');
	const serialNumberCell = document.createElement('td');
	const msingerCell = document.createElement('td');
	const fsingerCell = document.createElement('td');
	const songCell = document.createElement('td');
	const deleteCell = document.createElement('td');
	const deleteButton = document.createElement('button');

	serialNumberCell.textContent = serialNumber;
	msingerCell.textContent = msinger;
	fsingerCell.textContent = fsinger;
	songCell.textContent = song;
	deleteButton.textContent = 'Delete';
	deleteButton.addEventListener('click', () => {
		row.remove();
		adjustSerialNumbers();
	});

	row.appendChild(serialNumberCell);
	row.appendChild(msingerCell);
	row.appendChild(fsingerCell);
	row.appendChild(songCell);
	deleteCell.appendChild(deleteButton);
	row.appendChild(deleteCell);
	songList.appendChild(row);

	serialNumber++;
	songInput.value = '';
}

function adjustSerialNumbers() {
	const rows = songList.querySelectorAll('tr');
	rows.forEach((row, index) => {
		const serialNumberCell = row.querySelector('td:first-child');
		serialNumberCell.textContent = index + 1;
	});
}
