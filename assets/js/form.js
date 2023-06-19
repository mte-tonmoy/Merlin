window.onload = function() {
  document.getElementById("rentalForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent form submission

    // Validate form inputs
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var carType = document.getElementById("carType").value;
    var pickupDate = document.getElementById("pickupDate").value;
    var returnDate = document.getElementById("returnDate").value;

    if (name === "" || email === "" || phone === "" || carType === "" || pickupDate === "" || returnDate === "") {
      alert("Please fill in all fields.");
      return;
    }

    // Submit the form
    this.submit();
  };
};
