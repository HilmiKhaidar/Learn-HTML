const form = document.getElementById('todo-form');
const input = document.getElementById('todo-input');
const list = document.getElementById('todo-list');

let todos = JSON.parse(localStorage.getItem('todos')) || [];

// Tampilkan semua tugas saat awal
todos.forEach(showTodo);

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const text = input.value.trim();
  if (text !== "") {
    const todo = { text, done: false };
    todos.push(todo);
    saveTodos();
    showTodo(todo);
    input.value = "";
  }
});

function showTodo(todo, index = todos.length - 1) {
  const li = document.createElement('li');
  li.textContent = todo.text;
  if (todo.done) li.classList.add('completed');

  li.addEventListener('click', () => {
    todo.done = !todo.done;
    li.classList.toggle('completed');
    saveTodos();
  });

  const delBtn = document.createElement('button');
  delBtn.textContent = 'Hapus';
  delBtn.className = 'delete-btn';
  delBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    todos.splice(index, 1);
    saveTodos();
    renderTodos();
  });

  li.appendChild(delBtn);
  list.appendChild(li);
}

function renderTodos() {
  list.innerHTML = '';
  todos.forEach(showTodo);
}

function saveTodos() {
  localStorage.setItem('todos', JSON.stringify(todos));
}
