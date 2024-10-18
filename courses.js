// document.addEventListener('DOMContentLoaded', function() {
//     const dropdown1Btn = document.querySelector('#dropdown1 .dropdown-btn');
//     const dropdown1Content = document.querySelector('#dropdown1 .dropdown-content');
//     const dropdown1Table = document.getElementById('dropdown-table1');

//     const dropdown2Btn = document.querySelector('#dropdown2 .dropdown-btn');
//     const dropdown2Content = document.querySelector('#dropdown2 .dropdown-content');
//     const dropdown2Table = document.getElementById('dropdown-table2');

//     const dropdown3Btn = document.querySelector('#dropdown3 .dropdown-btn');
//     const dropdown3Content = document.querySelector('#dropdown3 .dropdown-content');
//     const dropdown3Table = document.getElementById('dropdown-table3');

//     const dropdown4Btn = document.querySelector('#dropdown4 .dropdown-btn');
//     const dropdown4Content = document.querySelector('#dropdown4 .dropdown-content');
//     const dropdown4Table = document.getElementById('dropdown-table4');

//     const dropdown5Btn = document.querySelector('#dropdown5 .dropdown-btn');
//     const dropdown5Content = document.querySelector('#dropdown5 .dropdown-content');
//     const dropdown5Table = document.getElementById('dropdown-table5');

//     const dropdown6Btn = document.querySelector('#dropdown6 .dropdown-btn');
//     const dropdown6Content = document.querySelector('#dropdown6 .dropdown-content');
//     const dropdown6Table = document.getElementById('dropdown-table6');

//     const dropdown7Btn = document.querySelector('#dropdown7 .dropdown-btn');
//     const dropdown7Content = document.querySelector('#dropdown7 .dropdown-content');
//     const dropdown7Table = document.getElementById('dropdown-table7');

//     const dropdown8Btn = document.querySelector('#dropdown8 .dropdown-btn');
//     const dropdown8Content = document.querySelector('#dropdown8 .dropdown-content');
//     const dropdown8Table = document.getElementById('dropdown-table8');

//     const data1 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'],['John'], ['John'], ['John'], ['John']];
//     const data2 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'] ['John']];
//     const data3 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'],['John'], ['John'], ['John'], ['John']];
//     const data4 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'],['John'], ['John'], ['John'], ['John']];
//     const data5 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'],['John'], ['John'], ['John'], ['John']];
//     const data6 = [['Subject'], ['John'], ['Doe'], ['John'], ['John'], ['John'],['John'], ['John'], ['John'], ['John']];
//     const data7 = [['Not Yet Started']];
//     const data8 = [['Not Yet Started']];


//     // Function to create and populate a dropdown table
//     function populateDropdownTable(tableElement, data) {
//         tableElement.innerHTML = ''; // Clear existing table content
//         data.forEach(rowData => {
//             const row = document.createElement('tr');
//             rowData.forEach(cellData => {
//                 const cell = document.createElement('td');
//                 cell.textContent = cellData;
//                 row.appendChild(cell);
//             });
//             tableElement.appendChild(row);
//         });
//     }

//     // Populate dropdown tables initially
//     populateDropdownTable(dropdown1Table, data1);
//     populateDropdownTable(dropdown2Table, data2);
//     populateDropdownTable(dropdown3Table, data3);
//     populateDropdownTable(dropdown4Table, data4);
//     populateDropdownTable(dropdown5Table, data5);
//     populateDropdownTable(dropdown6Table, data6);
//     populateDropdownTable(dropdown7Table, data7);
//     populateDropdownTable(dropdown8Table, data8);

//     // Toggle dropdown visibility on button click
//     dropdown1Btn.addEventListener('click', function() {
//         dropdown1Content.style.display = dropdown1Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown2Btn.addEventListener('click', function() {
//         dropdown2Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown3Btn.addEventListener('click', function() {
//         dropdown3Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });
    
//     dropdown4Btn.addEventListener('click', function() {
//         dropdown4Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown5Btn.addEventListener('click', function() {
//         dropdown5Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown6Btn.addEventListener('click', function() {
//         dropdown6Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown7Btn.addEventListener('click', function() {
//         dropdown7Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });

//     dropdown8Btn.addEventListener('click', function() {
//         dropdown8Content.style.display = dropdown2Content.style.display === 'block' ? 'none' : 'block';
//     });
// });

document.addEventListener('DOMContentLoaded', function() {
    const dropdown1Btn = document.querySelector('#dropdown1 .dropdown-btn');
    const dropdown1Content = document.querySelector('#dropdown1 .dropdown-content');
    const dropdown1Table = document.getElementById('dropdown-table1');

    const dropdown2Btn = document.querySelector('#dropdown2 .dropdown-btn');
    const dropdown2Content = document.querySelector('#dropdown2 .dropdown-content');
    const dropdown2Table = document.getElementById('dropdown-table2');
  
    const dropdown3Btn = document.querySelector('#dropdown3 .dropdown-btn');
    const dropdown3Content = document.querySelector('#dropdown3 .dropdown-content');
    const dropdown3Table = document.getElementById('dropdown-table3');

    const dropdown4Btn = document.querySelector('#dropdown4 .dropdown-btn');
    const dropdown4Content = document.querySelector('#dropdown4 .dropdown-content');
    const dropdown4Table = document.getElementById('dropdown-table4');

    const dropdown5Btn = document.querySelector('#dropdown5 .dropdown-btn');
    const dropdown5Content = document.querySelector('#dropdown5 .dropdown-content');
    const dropdown5Table = document.getElementById('dropdown-table5');

    const dropdown6Btn = document.querySelector('#dropdown6 .dropdown-btn');
    const dropdown6Content = document.querySelector('#dropdown6 .dropdown-content');
    const dropdown6Table = document.getElementById('dropdown-table6');

    const dropdown7Btn = document.querySelector('#dropdown7 .dropdown-btn');
    const dropdown7Content = document.querySelector('#dropdown7 .dropdown-content');
    const dropdown7Table = document.getElementById('dropdown-table7');

    const dropdown8Btn = document.querySelector('#dropdown8 .dropdown-btn');
    const dropdown8Content = document.querySelector('#dropdown8 .dropdown-content');
    const dropdown8Table = document.getElementById('dropdown-table8');

    const data1 = [['ENG'], ['AC'], ['PSP'], ['PSP LAB'], ['CHEM'], ['CHEM LAB'],['EG'], ['TW']];
    const data2 = [['BEEE'], ['BEEE LAB'], ['SP'], ['SP LAB'], ['PS'], ['PPDS'],['PPDS LAB']];
    const data3 = [['MFCS'], ['DBMS'], ['DBMS LAB'], ['OOPJ'], ['OOPJ LAB'], ['UHV'],['DSA'], ['DSA LAB'], ['COA']];
    const data4 = [['OS'], ['SE'], ['SE LAB'], ['CN'], ['DLD'], ['EDAR'],['EDAR LAB'], ['CCD2']];
    const data5 = [['MPMC'], ['DAA'], ['DAA LAB'], ['AI'], ['AI LAB'], ['TOC'],['SPM'], ['TC']];
    const data6 = [['MEFA'], ['IOT'], ['WT'], ['SA'], ['CC'], ['CCD4'],['ML']];
    const data7 = [['Not Yet Started']];
    const data8 = [['Not Yet Started']];



    function populateDropdownTable(tableElement, data) {
        tableElement.innerHTML = ''; 
        data.forEach(rowData => {
            const row = document.createElement('tr');
            rowData.forEach(cellData => {
                const cell = document.createElement('td');
                cell.textContent = cellData;
                row.appendChild(cell);
            });
            tableElement.appendChild(row);
        });
    }

    

    populateDropdownTable(dropdown1Table, data1);
    populateDropdownTable(dropdown2Table, data2);
    populateDropdownTable(dropdown3Table, data3);
    populateDropdownTable(dropdown4Table, data4);
    populateDropdownTable(dropdown5Table, data5);
    populateDropdownTable(dropdown6Table, data6);
    populateDropdownTable(dropdown7Table, data7);
    populateDropdownTable(dropdown8Table, data8);
  


    function toggleDropdownVisibility(contentElement) {
        contentElement.style.display = contentElement.style.display === 'block' ? 'none' : 'block';
    }

    dropdown1Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown1Content);
    });

    dropdown2Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown2Content);
    });

    dropdown3Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown3Content);
    });

    dropdown4Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown4Content);
    });

    dropdown5Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown5Content);
    });

    dropdown6Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown6Content);
    });

    dropdown7Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown7Content);
    });

    dropdown8Btn.addEventListener('click', function() {
        toggleDropdownVisibility(dropdown8Content);
    });
});
