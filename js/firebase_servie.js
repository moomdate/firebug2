
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
    var relay1 ='CH1';
    var relay2 ='CH2';
    var relay3 ='CH3';
    var relay4 ='CH4';
//relay1
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
 //relay2
     const relaych2 = firebase.database().ref('Device/Relay').child(relay2);
    relaych2.on('value', function(snapshot) {
        var data = JSON.stringify(snapshot.val());
        if(data == 1){
         $("#relay2_on").show();
         $("#relay2_off").hide();
     }else{
        $("#relay2_off").show();
        $("#relay2_on").hide();
    }
});
    const relaych2update = firebase.database().ref().child('Device/Relay/');
    $("#relay2_on").click(function(){
        relaych2update.update({ CH2:0});
    });
     $("#relay2_off").click(function(){
        relaych2update.update({ CH2:1});
    });

     //relay3
     const relaych3 = firebase.database().ref('Device/Relay').child(relay3);
    relaych3.on('value', function(snapshot) {
        var data = JSON.stringify(snapshot.val());
        if(data == 1){
         $("#relay3_on").show();
         $("#relay3_off").hide();
     }else{
        $("#relay3_off").show();
        $("#relay3_on").hide();
    }
});
    const relaych3update = firebase.database().ref().child('Device/Relay/');
    $("#relay3_on").click(function(){
        relaych3update.update({ CH3:0});
    });
     $("#relay3_off").click(function(){
        relaych3update.update({ CH3:1});
    });

     //relay4
     const relaych4 = firebase.database().ref('Device/Relay').child(relay4);
    relaych4.on('value', function(snapshot) {
        var data = JSON.stringify(snapshot.val());
        if(data == 1){
         $("#relay4_on").show();
         $("#relay4_off").hide();
     }else{
        $("#relay4_off").show();
        $("#relay4_on").hide();
    }
});
    const relaych4update = firebase.database().ref().child('Device/Relay/');
    $("#relay4_on").click(function(){
        relaych4update.update({ CH4:0});
    });
     $("#relay4_off").click(function(){
        relaych4update.update({ CH4:1});
    });

}());
