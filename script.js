function login(event) {
    event.preventDefault();
    const id = document.getElementById("loginId").value;
    const pass = document.getElementById("password").value;
    if (id === "blood_bank" && pass === "blood") {
        window.location.href = "home.html";
    } else {
        alert("Invalid credentials");
    }
    return false;
}
/*
function donateBlood(event) {
    event.preventDefault();
    const donor = {
        name: document.getElementById("donorName").value,
        age: document.getElementById("age").value,
        gender: document.getElementById("gender").value,
        bloodGroup: document.getElementById("bloodGroup").value,
        contact: document.getElementById("contact").value
    };

    let donors = JSON.parse(localStorage.getItem("donors")) || [];
    donors.push(donor);
    localStorage.setItem("donors", JSON.stringify(donors));
    alert("Donation submitted!");
    event.target.reset();
    return false;
}

function requestBlood(event) {
    event.preventDefault();
    const request = {
        patientName: document.getElementById("patientName").value,
        bloodGroup: document.getElementById("reqBloodGroup").value,
        quantity: document.getElementById("quantity").value,
        hospital: document.getElementById("hospital").value,
        contact: document.getElementById("reqContact").value
    };

    let requests = JSON.parse(localStorage.getItem("requests")) || [];
    requests.push(request);
    localStorage.setItem("requests", JSON.stringify(requests));
    alert("Request submitted!");
    event.target.reset();
    return false;
}

function showAvailability() {
    let donors = JSON.parse(localStorage.getItem("donors")) || [];
    let availability = {};

    donors.forEach(d => {
        availability[d.bloodGroup] = (availability[d.bloodGroup] || 0) + 1;
    });

    let list = "<ul>";
    for (let group in availability) {
        list += `<li><strong>${group}</strong>: ${availability[group]} units</li>`;
    }
    list += "</ul>";
    document.getElementById("availabilityList").innerHTML = list;
}

function updateAvailability() {
    const type = document.getElementById("bloodSelect").value;

    // Fetch blood stock
    fetch(`get_stock.php?blood_group=${type}`)
        .then(res => res.text())
        .then(data => {
            document.getElementById("unitCount").textContent = `${data} Units`;
            document.getElementById("selectedType").textContent = type;
            document.getElementById("stockCard").style.display = "block";
        });

    // Fetch donors
    fetch(`get_donors.php?blood_group=${type}`)
        .then(res => res.json())
        .then(data => {
            const donorTable = document.querySelector("#donorTable tbody");
            donorTable.innerHTML = "";
            data.forEach(d => {
                donorTable.innerHTML += `<tr><td>${d.name}</td><td>${d.blood_group}</td><td>${d.age}</td><td>${d.phone}</td></tr>`;
            });
        });

    // Fetch requests
    fetch(`get_requests.php?blood_group=${type}`)
        .then(res => res.json())
        .then(data => {
            const requestTable = document.querySelector("#requestTable tbody");
            requestTable.innerHTML = "";
            data.forEach(r => {
                requestTable.innerHTML += `<tr><td>${r.name}</td><td>${r.blood_group}</td><td>${r.unit_required}</td><td>${r.hospital}</td><td>${r.contact}</td><td>${r.location}</td></tr>`;
            });
        });
}
*/