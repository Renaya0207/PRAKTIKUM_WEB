// =====================
// Function
// =====================
function showAlert(message) {
  alert(message);
}

// =====================
// Event Handling & DOM Manipulation
// =====================

// Klik card
const cards = document.querySelectorAll(".card");
cards.forEach(card => {
  card.addEventListener("click", function () {
    const title = card.querySelector("h3").textContent;
    showAlert("Kamu memilih koleksi: " + title);
  });
});

// Submit form
const form = document.querySelector("form");
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value;
  const newElement = document.createElement("p");
  newElement.textContent = `Terima kasih, ${name}! Pesanmu sudah diterima.`;
  document.getElementById("kontak").appendChild(newElement);

  form.reset();
});

// Dark mode button
const darkToggle = document.createElement("button");
darkToggle.textContent = "🌙 Dark Mode";
darkToggle.id = "darkModeToggle";
document.querySelector("header").appendChild(darkToggle);

darkToggle.addEventListener("click", function () {
  document.body.classList.toggle("dark-mode");
  if (document.body.classList.contains("dark-mode")) {
    darkToggle.textContent = "☀️ Light Mode";
  } else {
    darkToggle.textContent = "🌙 Dark Mode";
  }
});

// =====================
// Fetch API (opsional)
// =====================
// =====================
// Fetch API (Marvel/Avengers dari OMDb)
// =====================
async function fetchData() {
  try {
    const response = await fetch("https://www.omdbapi.com/?s=Avengers&apikey=thewdb");
    const data = await response.json();

    if (data.Search) {
      data.Search.forEach(item => {
        const article = document.createElement("article");
        article.classList.add("card");
        article.innerHTML = `
          <img src="${item.Poster}" alt="${item.Title}">
          <h3>${item.Title}</h3>
          <p>Tahun: ${item.Year}</p>
        `;
        document.getElementById("koleksi").appendChild(article);
      });
    }
  } catch (error) {
    console.error("Fetch gagal:", error);
  }
}

fetchData();

