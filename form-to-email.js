const btn = document.querySelector('button');

function sendData(data) {
  const XHR = new XMLHttpRequest();
  const FD = new FormData();

  // Push our data into our FormData object
  for (const [name, value] of Object.entries(data)) {
    FD.append(name, value);
  }

  // Define what happens on successful data submission
  XHR.addEventListener('load', (event) => {
    alert('Te-ai autentificat cu succes');
  });

  // Define what happens in case of an error
  XHR.addEventListener('error', (event) => {
    alert('Nu ati completat toate câmpurile necesare!');
  });

  // Set up our request
  XHR.open('POST', 'maadeleke02@gmail.com');

  // Send our FormData object; HTTP headers are set automatically
  XHR.send(FD);
}

btn.addEventListener('click', () => {
  sendData({ test: 'ok' });
});