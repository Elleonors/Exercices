//Exercice 1
fetch('https://project-622bb.firebaseio.com/BeCode.json')
  .then(function hello(response) {
    response.json()
      .then(function (data) {
        var x = 0;
        for ( x == 0 ; x < 11 ; x++ ) { //json is damaged, but if correct , replace "x<11" in next line by this => "x < Object.keys(data).length"
          document.getElementById('wikiprofiles').appendChild(document.createElement('figure')); //create fig in container and apply classes
          document.getElementsByTagName('figure')[x].setAttribute('class', 'col-md-3');
          document.getElementsByTagName('figure')[x].appendChild(document.createElement('h2')); //create h2 in fig and apply classes and text
          document.getElementsByTagName('h2')[x].setAttribute('class', 'text-center');
          document.getElementsByTagName('h2')[x].innerHTML= data[x]['profile']['firstname'] + " " + data[x]['profile']['lastname'];
          document.getElementsByTagName('figure')[x].appendChild(document.createElement('img')); //create img in fig and apply attributes
          document.getElementsByTagName('img')[x].setAttribute('class', 'img-fluid');
          document.getElementsByTagName('img')[x].setAttribute('alt', 'picture of ' + data[x]['profile']['firstname'] + " " + data[x]['profile']['lastname']);
          document.getElementsByTagName('img')[x].setAttribute('src', data[x]['image']);
          document.getElementsByTagName('figure')[x].appendChild(document.createElement('figcaption')); //create figc in fig and apply classes and text
          document.getElementsByTagName('figcaption')[x].setAttribute('class','text-center');
          document.getElementsByTagName('figcaption')[x].innerHTML= data[x]['history'];
        }
      });
  });