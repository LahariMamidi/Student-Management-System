const cse_imgUrl = "cse.png";
const ece_imgUrl = "ece.png";
const eee_imgUrl = "eee.png";
const civil_imgUrl = "civil.png";
const mech_imgUrl = "mech.png";

const data = [
    { department: 'CSE', title: 'Event', description: 'Description for Card 1', imageUrl: cse_imgUrl },
    { department: 'ECE', title: 'Event', description: 'Description for Card 2', imageUrl: ece_imgUrl },
    { department: 'EEE', title: 'Event', description: 'Description for Card 3', imageUrl: eee_imgUrl },
    { department: 'CIVIL', title: 'Event', description: 'Description for Card 4', imageUrl: civil_imgUrl },
    { department: 'MECHANICAL', title: 'Event', description: 'Description for Card 5', imageUrl: mech_imgUrl },
];

// Function to generate vertical cards with horizontal content
function generateVerticalCards(data) {
    const cardContainer = document.getElementById('cardContainer');
    data.forEach(item => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.innerHTML = `
            <img src="${item.imageUrl}" alt="${item.title}">
            <div>
                <h3>${item.department}</h3>
            </div>
            <div>
                <h3>${item.title}</h3>
            </div>
            <div>
                <p>${item.description}</p>
            </div>
        `;
        cardContainer.appendChild(card);
    });
}

// Call the function with sample data
generateVerticalCards(data);
