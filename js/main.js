(() => {

// VARIABLES

// FUNCTIONS
function fetchData() {
  fetch('../../authoring_w7/includes/connect.php?carModel=R58')
  .then(res => res.json())
  .then(data => console.log(data)) 
  .catch(function(error) {
    console.error(error);
  });
}

// EVENTS
fetchData();


})();