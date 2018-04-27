var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', '../data.json');
ourRequest.onload = function() {
  console.log(ourRequest.responseText);
};
ourRequest.send();