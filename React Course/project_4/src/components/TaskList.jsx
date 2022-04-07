import React, { useState } from 'react'
import TaskForm from './TaskForm';
import Task from './Task'

import '../styles/taskList.css'


export default function TaskList() {

  const [tasks, setTasks] = useState([]);

  const addTask = task => {
    if (task.text.trim()) {
      task.text = task.text.trim();
      const allTasks = [task, ...tasks];
      setTasks(allTasks);
    }
  };

  const deleteTask = id => {
    const allTasks = tasks.filter(task => task.id !== id);
    setTasks(allTasks);
  };

  const completeTask = id => {
    const allTasks = tasks.map(task => {
      if (task.id === id) {
        task.complete = !task.complete;
      }
      return task;
    });
    setTasks(allTasks);
  };

  return (
    <>
      <TaskForm onSubmit={addTask} />
      <div className='task-list-container'>
        {
          tasks.map((task) =>
            <Task
              key={task.id}
              id={task.id}
              text={task.text}
              complete={task.complete}
              deleteTask={deleteTask}
              completeTask={completeTask}
            />
          )
        }
      </div>
    </>
  );
}
