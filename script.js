document.addEventListener("DOMContentLoaded", function() {
    const taskForm = document.getElementById("task-form");
    const taskList = document.getElementById("task-list");
  
    taskForm.addEventListener("submit", function(event) {
      event.preventDefault();
      const newTaskInput = document.getElementById("new-task");
      const newTaskText = newTaskInput.value.trim();
  
      if (newTaskText !== "") {
        const listItem = document.createElement("li");
        listItem.innerHTML = `
          <input type="checkbox">
          <label>${newTaskText}</label>
        `;
        taskList.appendChild(listItem);
        newTaskInput.value = "";
      }
    });
  });
  