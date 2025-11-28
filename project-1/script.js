const reviewTitles = [
    "Amazing Experience!",
    "So Cute and Nostalgic!",
    "Highly Recommended!"
];

const reviewTexts = [
    `“I love how simple and nostalgic it feels to capture memories instantly. Naomi’s INK brought back the joy of printing my favorite moments!” — Sarah L.`,
    `“The prints are so beautiful and high quality. It really brought my memories to life!” — Emily R.`,
    `“Perfect gift idea! My friends loved their polaroids!” — Daniel M.`
];

let currentIndex = 0;

function updateReview() {
    document.querySelector(".textAvaliation h3").textContent = reviewTitles[currentIndex];
    document.querySelector(".textAvaliation p").innerHTML = `<em>${reviewTexts[currentIndex]}</em>`;
}

document.querySelectorAll(".btnBack button")[0].addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + reviewTitles.length) % reviewTitles.length;
    updateReview();
});

document.querySelectorAll(".btnBack button")[1].addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % reviewTitles.length;
    updateReview();
});

// Load initial text
updateReview();