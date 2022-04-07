import React, { useState } from 'react'
import { v4 as uuidv4 } from 'uuid'

import '../styles/taskForm.css'

export default function TaskForm(props) {

  const [input, setInput] = useState('');

  const changeManager = e => {
    setInput(e.target.value);
  };

  const submitManager = e => {
    e.preventDefault();

    const newTask = {
      id: uuidv4(),
      text: input,
      complete: false,
    };

    props.onSubmit(newTask);
  };

  return (
    <form className='task-form' onSubmit={submitManager}>
      <input
        className='task-input'
        type='text'
        placeholder='Escribe una Tarea'
        name='text'
        onChange={changeManager}
      />
      <button
        className='task-button'>
        Agregar Tarea
      </button>
    </form>
  );
}
