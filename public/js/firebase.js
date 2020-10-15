(function() {
  let firebaseConfig = {
    apiKey: "AIzaSyDmRuv0199H-HgOEMaVr9KcSRM_gDqcT4Q",
    authDomain: "flood-17c57.firebaseapp.com",
    databaseURL: "https://flood-17c57.firebaseio.com",
    projectId: "flood-17c57",
    storageBucket: "flood-17c57.appspot.com",
    messagingSenderId: "657851204964",
    appId: "1:657851204964:web:63dff08b59321ea3806671",
    measurementId: "G-NELFTW3R3T"
  };

  firebase.initializeApp(firebaseConfig);
  let db = firebase.firestore();

    db.collection("UsersInfo").get().then(function(querySnapshot) {

        let userInfoTableBodyRef = document.getElementById("userInfoTableBody");

        querySnapshot.forEach(function(doc) {

          let usersInfo = [];

          usersInfo.push(doc.data().phoneNumber);
          usersInfo.push(doc.data().userName);
          usersInfo.push(doc.data().numberOfFamilyMembers);
          usersInfo.push(doc.data().educationalQualification);
          usersInfo.push(doc.data().occupation);
          usersInfo.push(doc.data().numberOfEarningFamilyMembers);
          usersInfo.push(doc.data().monthlyIncome);
          usersInfo.push(doc.data().monthlyExpenditure);
          usersInfo.push(doc.data().ownFarmingLand);
          usersInfo.push(doc.data().farmingLandArea);
          usersInfo.push(doc.data().farmingLandUnit);
          usersInfo.push(doc.data().dwellingType);
          usersInfo.push(doc.data().numberOfDucks);
          usersInfo.push(doc.data().numberOfChickens);
          usersInfo.push(doc.data().numberOfCows);
          usersInfo.push(doc.data().numberOfGoats);
          usersInfo.push(doc.data().ownsFish);
          usersInfo.push(doc.data().incomeFromFish);


          let newRow = userInfoTableBodyRef.insertRow(-1);

          for (let i in usersInfo) {
            let newCell = newRow.insertCell(0);
            newCell.innerHTML = usersInfo[usersInfo.length-1-i];
          }
          console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
      console.log("Error getting documents: ", error);
    });

  db.collection("UsersDamageInfo").get().then(function(querySnapshot) {

    let damageInfoTableBodyRef = document.getElementById("damageInfoTableBody");
    
    querySnapshot.forEach(function(doc) {

      let usersDamageInfo = [];

      usersDamageInfo.push(doc.data().phoneNumber);
      usersDamageInfo.push(doc.data().damageHome);
      usersDamageInfo.push(doc.data().damageHomeType);
      usersDamageInfo.push(doc.data().damageHomeAmount);
      usersDamageInfo.push(doc.data().damageLand);
      usersDamageInfo.push(doc.data().damageLandType);
      usersDamageInfo.push(doc.data().damageLandAmount);
      usersDamageInfo.push(doc.data().damageCrop);
      usersDamageInfo.push(doc.data().damageCropAmount);
      usersDamageInfo.push(doc.data().damagePond);
      usersDamageInfo.push(doc.data().damagePondAmount);
      usersDamageInfo.push(doc.data().damageOthers);
      usersDamageInfo.push(doc.data().damageOthersType);
      usersDamageInfo.push(doc.data().damageOthersAmount);
      usersDamageInfo.push(doc.data().aidType);
      usersDamageInfo.push(doc.data().aidPeriod);
      usersDamageInfo.push(doc.data().aidFrom);
      usersDamageInfo.push(doc.data().aidAmount);
      usersDamageInfo.push(doc.data().otherAids);

      let newRow = damageInfoTableBodyRef.insertRow(-1);

      for (let i in usersDamageInfo) {
        let newCell = newRow.insertCell(0);
        newCell.innerHTML = usersDamageInfo[usersDamageInfo.length-1-i];
      }
      console.log(doc.id, " => ", doc.data());
    });
  })
  .catch(function(error) {
    console.log("Error getting documents: ", error);
  });

}());
