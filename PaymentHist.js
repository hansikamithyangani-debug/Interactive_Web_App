

  fetch(`/api/getPayments?userId=${currentUser.id}`)
  .then(res => res.json())
  .then(payments => {
    payments.forEach(p => {
      // append each payment to table
      tableBody.innerHTML += `
        <tr>
          <td>${p.name}</td>
          <td>${p.email}</td>
          <td>$${p.amount}</td>
          <td>${p.method}</td>
          <td>${new Date(p.date).toLocaleString()}</td>
        </tr>
      `;
    });
  });