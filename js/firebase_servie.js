
console.log("helloo00000");

(function(){
    var config = {
        apiKey: "AIzaSyBBJfI1xVF6yV4NEQaos6hkob14oagLs2c",
        authDomain: "test-ce9c3.firebaseapp.com",
        databaseURL: "https://test-ce9c3.firebaseio.com",
        projectId: "test-ce9c3",
        storageBucket: "test-ce9c3.appspot.com",
        messagingSenderId: "453098043145"
    };
    firebase.initializeApp(config);
    var relay1 = 'CH1';
    const relaych1 = firebase.database().ref('Device/Relay').child(relay1);
    relaych1.on('value', function(snapshot) {
        var data = JSON.stringify(snapshot.val());
        if(data == 1){
         $("#relay1_on").show();
         $("#relay1_off").hide();
     }else{
        $("#relay1_off").show();
        $("#relay1_on").hide();
    }
});
    const relaych1update = firebase.database().ref().child('Device/Relay/');
    $("#relay1_on").click(function(){
        relaych1update.update({ CH1:0});
    });
     $("#relay1_off").click(function(){
        relaych1update.update({ CH1:1});
    });

}());
