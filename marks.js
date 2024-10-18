// Sample data
const tablesData = [
    { heading: 'III-BTECH::II-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['MEFA', 98], ['WT', 100], ['IOT', 100], ['SA', 100], ['ML', 100],
     ['CCD4', 100]] },

    { heading: 'III-BTECH::I-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['MPMC', 98], ['DAA', 100], ['DAA LAB', 95], ['AI', 100], ['AI LAB', 97],
     ['CD LAB', 97], ['SPM', 100]] },

    { heading: 'II-BTECH::II-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['OS', 100], ['SE', 100], ['SE LAB', 97], ['TW', 100], ['CN', 99],
     ['OS LAB', 100], ['DLD', 95], ['CCD2', 100], ['EDAR', 100], ['EDAR LAB', 100]] },

    { heading: 'II-BTECH::I-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['MFCS', 100], ['DBMS', 100], ['DBMS LAB', 96], ['OOPJ', 100], ['OOPJ LAB', 97],
     ['UHV', 100], ['DSA', 98], ['DSA LAB', 100], ['COA', 100]] },

    { heading: 'I-BTECH::II-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['BEEE', 100], ['BEEE LAB', 100], ['SP', 100], ['SP LAB', 100], ['CS LAB', 98],
     ['PPDS', 100], ['PPDS LAB', 100]] },
     
    { heading: 'I-BTECH::I-SEMESTER', rows: [['Subject Name', 'Percentage'], 
    ['ENG', 98], ['PSP', 100], ['PSP LAB', 95], ['CHEM', 100], ['CHEM LAB', 97],
     ['TW', 95], ['EG', 95]] }
];

// Function to create tables
function createTables(data) {
    const container = document.getElementById('tables-container');

    data.forEach(tableData => {
        const tableContainer = document.createElement('div');
        tableContainer.className = 'table-container';

        const heading = document.createElement('h2');
        heading.textContent = tableData.heading;
        heading.classList.add('sem-head');
        tableContainer.appendChild(heading);

        const table = document.createElement('table');

        tableData.rows.forEach(rowData => {
            const row = document.createElement('tr');
            rowData.forEach(cellData => {
                const cell = document.createElement('td');
                cell.textContent = cellData;
                row.appendChild(cell);
            });
            table.appendChild(row);
        });

        tableContainer.appendChild(table);
        container.appendChild(tableContainer);
    });
}

// Call the function with the sample data
createTables(tablesData);
