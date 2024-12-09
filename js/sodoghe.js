// Dữ liệu ghế
const seatTypes = [
    { type: 'regular', label: 'Ghế thường', count: 20 },
    { type: 'vip', label: 'Ghế VIP', count: 20 },
    { type: 'single', label: 'Ghế đơn', count: 20 },
    { type: 'double', label: 'Ghế đôi', count: 10 }
  ];

  // Lấy container
  const seatMap = document.getElementById('seat-map');
  const selectedSeatInfo = document.getElementById('selected-seat');

  // Biến lưu ghế đã chọn
  let selectedSeats = [];

  // Tạo sơ đồ ghế
  seatTypes.forEach((seatGroup, index) => {
    const rowCount = Math.ceil(seatGroup.count / (seatGroup.type === 'double' ? 5 : 10)); // Ghế đôi: 5 ghế mỗi hàng

    for (let row = 0; row < rowCount; row++) {
      const rowDiv = document.createElement('div');
      rowDiv.className = `row ${seatGroup.type === 'double' ? 'double-row' : ''}`;
      seatMap.appendChild(rowDiv);

      const seatsInRow = seatGroup.type === 'double' && row === rowCount - 1
        ? seatGroup.count % 5 || 5 // Đảm bảo hàng cuối chỉ chứa số ghế vừa đủ
        : Math.min(seatGroup.count - row * (seatGroup.type === 'double' ? 5 : 10), seatGroup.type === 'double' ? 5 : 10);

      for (let i = 0; i < seatsInRow; i++) {
        const seat = document.createElement('div');
        seat.className = `seat ${seatGroup.type}`;
        seat.textContent = row * 10 + i + 1 + index * 20; // Số ghế tuần tự
        seat.setAttribute('data-type', seatGroup.label);
        seat.setAttribute('data-seat-number', row * 10 + i + 1 + index * 20);
        rowDiv.appendChild(seat);
      }
    }
  });

  // Xử lý sự kiện click
  const seats = document.querySelectorAll('.seat');
  seats.forEach(seat => {
    seat.addEventListener('click', () => {
      const seatNumber = seat.getAttribute('data-seat-number');
      const seatType = seat.getAttribute('data-type');

      if (seat.classList.contains('selected')) {
        // Bỏ chọn ghế
        seat.classList.remove('selected');
        selectedSeats = selectedSeats.filter(s => s.seatNumber !== seatNumber);
      } else {
        // Chọn thêm ghế
        seat.classList.add('selected');
        selectedSeats.push({ seatNumber, seatType });
      }

      // Cập nhật thông tin ghế đã chọn
      updateSelectedSeatsInfo();
    });
  });

  // Hàm cập nhật thông tin ghế đã chọn
  function updateSelectedSeatsInfo() {
    if (selectedSeats.length === 0) {
      selectedSeatInfo.textContent = 'Chưa chọn ghế nào';
    } else {
      const seatsText = selectedSeats.map(s => `Ghế ${s.seatNumber} (${s.seatType})`).join(', ');
      selectedSeatInfo.textContent = `Bạn đã chọn: ${seatsText}`;
    }
  }