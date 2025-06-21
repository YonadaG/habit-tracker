document.getElementById('habit-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const name = document.getElementById('habit-name').value;
  const category = document.getElementById('habit-category').value;

  fetch('add_habit.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: `name=${encodeURIComponent(name)}&category=${encodeURIComponent(category)}`
  })
  .then(res => res.text())
  .then(() => {
    loadHabits();
    document.getElementById('habit-form').reset();
  });
});

function loadHabits() {
  fetch('get_habits.php')
    .then(res => res.json())
    .then(data => {
      const container = document.getElementById('habit-list');
      container.innerHTML = '';
      data.forEach(habit => {
        const div = document.createElement('div');
        div.className = 'habit-item';
        div.innerText = `${habit.name} (${habit.category})`;
        container.appendChild(div);
      });
    });
}

window.onload = loadHabits;

