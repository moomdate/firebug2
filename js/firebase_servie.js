console.log("hello");
(function(){
    var config = {
    apiKey: "AIzaSyBnIYXmksrjd0c7V2XwQ1DfsYTRFjrPBh4",
    authDomain: "showdata-27f44.firebaseapp.com",
    databaseURL: "https://showdata-27f44.firebaseio.com",
    projectId: "showdata-27f44",
    storageBucket: "showdata-27f44.appspot.com",
    messagingSenderId: "856643618548"
  };
 firebase.initializeApp(config);
    var head = document.getElementById('head');
    var  object = firebase.database().ref();
    var childSelete = object.child('text');
      childSelete.on('value', snap => {
	       var data = JSON.stringify(snap.val());
	       head.innerHTML = data.replace(/^"(.*)"$/, '$1');
		     console.log(snap.val());
		 //console.log(snap.key);
	});
}());
