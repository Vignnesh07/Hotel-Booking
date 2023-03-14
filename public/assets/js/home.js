// const roomNumbers = {
//     single: ['SI001', 'SI002', 'SI003', 'SI004', 'SI005', 'SI006', 'SI007', 'SI008', 'SI009', 'DO010'],
//     double: ['DO001', 'DO002', 'DO003', 'DO004', 'DO005', 'DO006', 'DO007', 'DO008', 'DO009', 'DO010'],
//     triple:['TR001', 'TR002', 'TR003', 'TR004', 'TR005'],
//     queen:['QU001', 'QU002', 'QU003', 'QU004', 'QU005', 'QU006', 'QU007', 'QU008', 'QU009', 'QU010'],
//     king:['KI001', 'KI002', 'KI003', 'KI004', 'KI005', 'KI006', 'KI007', 'KI008', 'KI009', 'KI010'],
//     studio:['ST001', 'ST002', 'ST003', 'ST004', 'ST005', 'ST006', 'ST007', 'ST008', 'ST009', 'ST010'],
//     executive:['ES001', 'ES002', 'ES003'],
//     presidential:['PS001', 'PS002', 'PS003']
//   };

var input = document.querySelector("#phone");
window.intlTelInput(input, {});

function filterRooms() {
    // Get the selected room type
    const roomType = document.getElementById('roomtype').value;
  
    // Get the room number select box and clear its options
    const roomNumberSelect = document.getElementById('roomnumber');
    roomNumberSelect.innerHTML = '';
  
    // If the selected room type is "single", show room numbers S001 to S010
    if (roomType === 'single') {
        for (let i = 1; i <= 10; i++) {
            const roomNumber = i < 10 ? `SI00${i}` : `SI010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }
  
    // If the selected room type is "double", show room numbers D001 to D010
    else if (roomType === 'double') {
        for (let i = 1; i <= 10; i++) {
            const roomNumber = i < 10 ? `DO00${i}` : `DO010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }
  
    else if (roomType === 'triple') {
        for (let i = 1; i <= 5; i++) {
            const roomNumber = i < 10 ? `TR00${i}` : `TRO010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }

    else if (roomType === 'queen') {
        for (let i = 1; i <= 10; i++) {
            const roomNumber = i < 10 ? `QU00${i}` : `QUO010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }

    else if (roomType === 'king') {
        for (let i = 1; i <= 10; i++) {
            const roomNumber = i < 10 ? `KI00${i}` : `KI010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }

    else if (roomType === 'studio') {
        for (let i = 1; i <= 10; i++) {
            const roomNumber = i < 10 ? `ST00${i}` : `ST010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }

    else if (roomType === 'executive') {
        for (let i = 1; i <= 3; i++) {
            const roomNumber = i < 10 ? `ES00${i}` : `ES010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }

    else if (roomType === 'presidential') {
        for (let i = 1; i <= 3; i++) {
            const roomNumber = i < 10 ? `PS00${i}` : `PS010`;
            const option = document.createElement('option');
            option.text = roomNumber;
            option.value = roomNumber;
            roomNumberSelect.add(option);
        }
    }


    // Show the room number select box
    roomNumberSelect.style.display = 'block';
}